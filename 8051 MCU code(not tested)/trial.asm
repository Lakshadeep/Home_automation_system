ORG 0000h
	call baudrate
	mov a,#'N'
	call send
	mov a,#'I'
	call send	
	mov a,#'T'
	call send	
	mov a,#' '
	call send	
	mov a,#'G'
	call send	
	mov a,#'O'
	call send	
	mov a,#'A'
	call send	
	call send_newline
loop:
	call receive
	call send
	call send_newline
	ajmp loop
baudrate:
	mov scon,#50h
	mov tmod,#20h
	mov th1,#0fdh
	setb tr1
	ret	
send:
	mov sbuf,a
	jnb ti,$
	clr ti
	ret
receive:
	jnb RI,$
	clr ri
	mov a,sbuf
	ret
check_receive:
	jb ri,c1_check_receive
	clr c
	ret
c1_check_receive:
	clr RI
	mov a,sbuf
	setb c	
	ret
send_newline:
	mov a,#10
	call send
	ret
end	
				
		
		