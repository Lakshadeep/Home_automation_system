package com.ceafi;




import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;

public class Home1 extends Activity implements OnClickListener {
	Button onButton,offButton,manualButton,backButton;
	 @Override
		public void onCreate(Bundle savedInstanceState)
	    {
	        super.onCreate(savedInstanceState);

	        setContentView(R.layout.appliance1);
	        onButton=(Button)findViewById(R.id.on1);
	        onButton.setOnClickListener(this);
	        offButton=(Button)findViewById(R.id.off1);
	        offButton.setOnClickListener(this);
	        manualButton=(Button)findViewById(R.id.manual1);
	        manualButton.setOnClickListener(this);
	        backButton=(Button)findViewById(R.id.back1);
	        backButton.setOnClickListener(this);
	       
	    }
	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		switch (v.getId()) {
		case R.id.on1:
			Intent inte=new Intent(Home1.this,Result1.class);
			inte.setClass(Home1.this,Result1.class);
			startActivity(inte);
			finish();
			
			break;
		case R.id.off1:
			Intent inte1=new Intent(Home1.this,Result2.class);
			inte1.setClass(Home1.this,Result2.class);
			startActivity(inte1);
			finish();
			
			break;	
		case R.id.back1:
			Intent inte2=new Intent(Home1.this,Index.class);
			inte2.setClass(Home1.this,Index.class);
			startActivity(inte2);
			finish();
			
			break;	

		default:
			break;
		}
		
	}
	
	

}
