#!/bin/sh
echo > /home/urltvtk/public_html/site3/uploads/tv_channels_$USUARIO_plus.m3u
arq="$(curl -s -d "username=$USUARIO&password=$SENHA&type=m3u_plus&output=ts" http://sspitv.liss.fun:8880/get.php)"
echo "${arq}" >> /home/urltvtk/public_html/site3/uploads/tv_channels_$USUARIO_plus.m3u