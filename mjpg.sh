export STREAMER_PATH=/home/pi/code/mjpg-streamer/
export LD_LIBRARY_PATH=$STREAMER_PATH
$STREAMER_PATH/mjpg_streamer -i "input_uvc.so -y -n" -o "output_http.so -w $STREAMER_PATH/www"



