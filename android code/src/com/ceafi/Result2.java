package com.ceafi;






import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.webkit.WebView;
import android.widget.Button;

public class Result2 extends Activity implements OnClickListener {
	Button backButton;
	 @Override
		public void onCreate(Bundle savedInstanceState)
	    {
	        super.onCreate(savedInstanceState);

	        setContentView(R.layout.result2);
	        WebView webview=(WebView)findViewById(R.id.webView2);
	        webview.loadUrl("http://testingnitgoademo2.net84.net/Android/off1.php");
	        backButton=(Button)findViewById(R.id.back12);
	        backButton.setOnClickListener(this);
	        
	    }
	@Override
	public void onClick(View v) {
		// TODO Auto-generated method stub
		switch (v.getId()) {
		case R.id.back12:
			Intent inte=new Intent(Result2.this,Home1.class);
			inte.setClass(Result2.this,Home1.class);
			startActivity(inte);
			finish();
			
			break;

		default:
			break;
		}
		
	}
	
	

}

