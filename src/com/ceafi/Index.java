package com.ceafi;




import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;

public class Index extends Activity implements OnClickListener {
	Button button1Button,button2Button,button3Button,button4Button,button5Button,button6Button,button7Button,button8Button;
	 @Override
		public void onCreate(Bundle savedInstanceState)
	    {
	        super.onCreate(savedInstanceState);

	        setContentView(R.layout.index);
	        button1Button=(Button)findViewById(R.id.button1);
	        button1Button.setOnClickListener(this);
	        button2Button=(Button)findViewById(R.id.button2);
	        button2Button.setOnClickListener(this);
	        button3Button=(Button)findViewById(R.id.button3);
	        button3Button.setOnClickListener(this);
	        button4Button=(Button)findViewById(R.id.button4);
	        button4Button.setOnClickListener(this);
	        button5Button=(Button)findViewById(R.id.button5);
	        button5Button.setOnClickListener(this);
	        button6Button=(Button)findViewById(R.id.button6);
	        button6Button.setOnClickListener(this);
	        button7Button=(Button)findViewById(R.id.button7);
	        button7Button.setOnClickListener(this);
	        button8Button=(Button)findViewById(R.id.button8);
	        button8Button.setOnClickListener(this);
	    }
	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		switch (v.getId()) {
		case R.id.button1:
			Intent inte=new Intent(Index.this,Home1.class);
			inte.setClass(Index.this,Home1.class);
			startActivity(inte);
			finish();
			
			break;

		default:
			break;
		}
		
	}
	
	

}
