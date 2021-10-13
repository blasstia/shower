package com.example.auser.getokhttp1;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;

import java.io.IOException;

import okhttp3.Call;
import okhttp3.Callback;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.Response;

public class FirebaseActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_firebase);

//        https://fir-test3-e215c.firebaseio.com/House

    }


    public void getMethod(View target){
//        Log.d("test1","getMethod");
//        OkHttpClient client=new OkHttpClient();
////        String param="userid=1234&temperature=13";
//        String param="userid=" + userid.getText() + "&temperature="+temperature.getText();
//        Request request=new Request.Builder()
////                .url("http://127.0.0.1:8080/code/android_api/get_api.php?"+param)
//                .url("http://192.168.58.23:8080/code/android_api/get_api_return.php?"+param)
//                .build();
//        Log.d("test","http://127.0.0.1:8080/code/android_api/get_api_return.php?"+param);
//        Call call=client.newCall(request);
////        call.execute();
//        call.enqueue(new Callback() {
//            @Override
//            public void onFailure(Call call, IOException e) {
//                Log.d("test2","fail");
//
//            }
//
//            @Override
//            public void onResponse(Call call, Response response) throws IOException {
////                Log.d("test2","ok");
//                String json=response.body().string();//取得後端的body訊息
//                Log.d("test4",json);
//                switch (json){
//                    case "data Duplicate":
//                        Log.d("test5","資料己經存在,無法新增");
//                        break;
//                    case "Data insert OK":
//                        Log.d("test5","資料新增完成");
//                        break;
//                    case "Data insert FAIL":
//                        Log.d("test5","資料成新增失敗");
//                        break;
//                }
////                int flag=json.compareTo("0");
////
////                if (flag==0){
////                    Log.d("test5","0");
////                }else{
////                    Log.d("test5","1");
////                }
//            }
//        });
    }
}
