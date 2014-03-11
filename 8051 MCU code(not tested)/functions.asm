org 0000h
	call baudrate
Start:	call check_receive
	call c1_check_receive
	cjne a,#1,next
	setb p2.0
next:	cjne a,#2,next1
	setb p2.1
next1:	cjne a,#3,next2
	setb p2.2
next2:   call start 	
baudrate:
	mov scon,#50h
	mov tmod,#20h
	mov th1,#0fdh
	setb tr1
	ret
check_receive:
	jb RI,check_receive
	clr c
	ret
c1_check_receive:
	clr ri
	mov a,sbuf
	setb c
	ret
end	
	
	
	