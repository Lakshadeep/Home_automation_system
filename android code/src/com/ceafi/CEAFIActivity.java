package com.ceafi;



import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;

public class CEAFIActivity extends Activity implements OnClickListener {
	Button continueButton;
    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main);
        continueButton=(Button)findViewById(R.id.continue1);
        continueButton.setOnClickListener(this);
    }
	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		switch(v.getId()){
		case R.id.continue1:
			Intent inte=new Intent(CEAFIActivity.this,Index.class);
			inte.setClass(CEAFIActivity.this,Index.class);
			startActivity(inte);
			finish();
		}
		
	}
}