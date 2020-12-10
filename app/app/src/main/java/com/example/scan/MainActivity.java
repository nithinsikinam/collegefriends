package com.example.scan;

import android.content.DialogInterface;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import com.google.zxing.integration.android.IntentIntegrator;
import com.google.zxing.integration.android.IntentResult;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;


public class MainActivity extends AppCompatActivity  implements  View.OnClickListener {

    Button scanBtn;
    String code;
    String kl;
    String records;






    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        scanBtn = findViewById(R.id.scanBtn);
        scanBtn.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {

        scanCode();


    }

    private void scanCode() {

        IntentIntegrator integrator = new IntentIntegrator(this);
        integrator.setCaptureActivity(CaptureAct.class);
        integrator.setOrientationLocked(false);
        integrator.setDesiredBarcodeFormats(IntentIntegrator.ALL_CODE_TYPES);
        integrator.setPrompt("Scanning Code");
        integrator.initiateScan();

        new Async().execute();
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data){
        IntentResult result= IntentIntegrator.parseActivityResult(requestCode,resultCode,data);
        if (result !=null){
            if(result.getContents() !=null){
                AlertDialog.Builder builder =new AlertDialog.Builder(this);
                builder.setMessage(result.getContents());
                code = result.getContents();
                builder.setTitle("Scanning Result");
                builder.setPositiveButton("Scan Again", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {
                        scanCode();
                    }
                }).setNegativeButton("Finish", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {
                        finish();
                    }
                });
                AlertDialog dialog = builder.create();
                dialog.show();

            }
            else {
                Toast.makeText(this,"No Result",Toast.LENGTH_LONG).show();
            }
        }else{
            super.onActivityResult(requestCode,resultCode,data);
        }
    }

    class Async extends AsyncTask<Void, Void, Void> {





        @Override

        protected Void doInBackground(Void... voids) {

            try

            {

                Class.forName("com.mysql.jdbc.Driver");

                Connection connection = DriverManager.getConnection("jdbc:mysql://oyoschool.in:3306/yoschool_data", "yoschool_hasan", "{B0ulP*za2t8");

                Statement statement = connection.createStatement();

                ResultSet kl = statement.executeQuery("SELECT * FROM status");

                statement.executeUpdate("INSERT INTO status(std_code,class_code,time,status,last_time) " +
                        "VALUES ('"+code+"', 'sfsffdf','time','Late','09:30am')");

                while(kl.next()) {

                    records += kl.getString(1) + " " + kl.getString(2) + "\n";
                    Log.d("myTag", records);

                }
                Log.d("myTag1", code);
            }

            catch(Exception e)

            {

//                error = e.toString();
                Log.d("myTag", e.toString());

            }

            return null;

        }



        @Override

        protected void onPostExecute(Void aVoid) {

//            text.setText(records);
//
//            if(error != "")
//
//                errorText.setText(error);
//
//            super.onPostExecute(aVoid);

        }





    }


}