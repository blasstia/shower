package com.example.auser.getokhttp1;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;
//okhttp
import java.io.IOException;

import okhttp3.Call;
import okhttp3.Callback;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.Response;

public class MainActivity extends AppCompatActivity {
    EditText userid,temperature;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        userid=(EditText)findViewById(R.id.edtUserID) ;
        temperature=(EditText)findViewById(R.id.txtTemperature);

     }


    public void btnAdd(View target){
//        getMethod();…
        OkHttpClient client=new OkHttpClient();
        String param="account=" + userid.getText() + "&password="+temperature.getText();
        Request request=new Request.Builder()
                .url("http://192.168.58.23:8080/code/finalexam/add.php?"+param)
                .build();
        Call call=client.newCall(request);
        call.enqueue(new Callback() {
            @Override
            public void onFailure(Call call, IOException e) {
                runOnUiThread(new Runnable() {
                    @Override
                    public void run() {
                        Toast.makeText(MainActivity.this,"連線失敗",Toast.LENGTH_SHORT).show();
                    }
                });
            }
            @Override
            public void onResponse(Call call, Response response) throws IOException {
                final String json=response.body().string();//取得後端的body訊息
                runOnUiThread(new Runnable() {
                    @Override
                    public void run() {
                        Toast.makeText(MainActivity.this,json,Toast.LENGTH_SHORT).show();
                    }
                });
            }
        });
        userid.setText("");
        temperature.setText("");
    }
    public void btnUpdate(View target){
        OkHttpClient client=new OkHttpClient();
        String param="account=" + userid.getText() + "&password="+temperature.getText();
        Request request=new Request.Builder()
                .url("http://192.168.58.23:8080/code/finalexam/update.php?"+param)
                .build();
        Call call=client.newCall(request);
        call.enqueue(new Callback() {
            @Override
            public void onFailure(Call call, IOException e) {
                runOnUiThread(new Runnable() {
                    @Override
                    public void run() {
                        Toast.makeText(MainActivity.this,"連線失敗",Toast.LENGTH_SHORT).show();
                    }
                });
            }
            @Override
            public void onResponse(Call call, Response response) throws IOException {
                final String json=response.body().string();//取得後端的body訊息
                runOnUiThread(new Runnable() {
                    @Override
                    public void run() {
                        Toast.makeText(MainActivity.this,json,Toast.LENGTH_SHORT).show();
                    }
                });
            }
        });
        userid.setText("");
        temperature.setText("");
    }

    public void btnDelete(View target){
        OkHttpClient client=new OkHttpClient();
        String param="account=" + userid.getText() + "&password="+temperature.getText();
        Request request=new Request.Builder()
                .url("http://192.168.58.23:8080/code/finalexam/delete.php?"+param)
                .build();
        Call call=client.newCall(request);
        call.enqueue(new Callback() {
            @Override
            public void onFailure(Call call, IOException e) {
                runOnUiThread(new Runnable() {
                    @Override
                    public void run() {
                        Toast.makeText(MainActivity.this,"連線失敗",Toast.LENGTH_SHORT).show();
                    }
                });
            }
            @Override
            public void onResponse(Call call, Response response) throws IOException {
                final String json=response.body().string();//取得後端的body訊息
                runOnUiThread(new Runnable() {
                    @Override
                    public void run() {
                        Toast.makeText(MainActivity.this,json,Toast.LENGTH_SHORT).show();
                    }
                });
            }
        });
        userid.setText("");
        temperature.setText("");
    }
    public void btnCancel(View target){
        userid.setText("");
        temperature.setText("");
    }


    public void getMethod(){
        Log.d("test1","getMethod");
        OkHttpClient client=new OkHttpClient();
//        String param="userid=1234&temperature=13";=1bill&=3421
        String param="account=" + userid.getText() + "&password="+temperature.getText();
        Request request=new Request.Builder()
//                .url("http://127.0.0.1:8080/code/android_api/get_api.php?"+param)
//                .url("http://192.168.58.23:8080/code/android_api/get_api_return.php?"+param)
                .url("http://192.168.58.23:8080/code/finalexam/add.php?"+param)
                .build();
        Log.d("test","http://127.0.0.1:8080/code/finalexam/add.php?"+param);
        Call call=client.newCall(request);
//        call.execute();
        call.enqueue(new Callback() {
            @Override
            public void onFailure(Call call, IOException e) {
                Log.d("test2","fail");
                runOnUiThread(new Runnable() {
                    @Override
                    public void run() {
                        Toast.makeText(MainActivity.this,"連線失敗",Toast.LENGTH_SHORT).show();

                    }
                });

            }

            @Override
            public void onResponse(Call call, Response response) throws IOException {
//                Log.d("test2","ok");
                final String json=response.body().string();//取得後端的body訊息
//                Log.d("test4",json);
                runOnUiThread(new Runnable() {
                    @Override
                    public void run() {
                        Toast.makeText(MainActivity.this,json,Toast.LENGTH_SHORT).show();

                    }
                });

//                switch (json){
//                    case "data Duplicate":
////                        Toast.makeText(MainActivity.this,"",Toast.LENGTH_SHORT).show();
//                        runOnUiThread(new Runnable() {
//                            @Override
//                            public void run() {
//                                Toast.makeText(MainActivity.this,"資料己經存在,無法新增",Toast.LENGTH_SHORT).show();
//
//                            }
//                        });
//                        Log.d("test5","資料己經存在,無法新增");
//                        break;
//                    case "Data insert OK":
//                        Log.d("test5","資料新增完成");
//                        runOnUiThread(new Runnable() {
//                            @Override
//                            public void run() {
//                                Toast.makeText(MainActivity.this,"資料新增完成",Toast.LENGTH_SHORT).show();
//
//                            }
//                        });
//                        break;
//                    case "Data insert FAIL":
//                        runOnUiThread(new Runnable() {
//                            @Override
//                            public void run() {
//                                Toast.makeText(MainActivity.this,"資料成新增失敗",Toast.LENGTH_SHORT).show();
//
//                            }
//                        });
//                        Log.d("test5","資料成新增失敗");
//                        break;
//                }
//                int flag=json.compareTo("0");
//
//                if (flag==0){
//                    Log.d("test5","0");
//                }else{
//                    Log.d("test5","1");
//                }
            }
        });
    }
}
