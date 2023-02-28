$(document).ready(function(){let e=document.getElementById("echartBar");if(e){let t=echarts.init(e);t.setOption({legend:{borderRadius:0,orient:"horizontal",x:"right",data:["Online","Offline"]},grid:{left:"8px",right:"8px",bottom:"0",containLabel:!0},tooltip:{show:!0,backgroundColor:"rgba(0, 0, 0, .8)"},xAxis:[{type:"category",data:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec"],axisTick:{alignWithLabel:!0},splitLine:{show:!1},axisLine:{show:!0}}],yAxis:[{type:"value",axisLabel:{formatter:"${value}"},min:0,max:1e5,interval:25e3,axisLine:{show:!1},splitLine:{show:!0,interval:"auto"}}],series:[{name:"Online",data:[35e3,69e3,22500,6e4,5e4,5e4,3e4,8e4,7e4,6e4,2e4,30005],label:{show:!1,color:"#0168c1"},type:"bar",barGap:0,color:"#bcbbdd",smooth:!0,itemStyle:{emphasis:{shadowBlur:10,shadowOffsetX:0,shadowOffsetY:-2,shadowColor:"rgba(0, 0, 0, 0.3)"}}},{name:"Offline",data:[45e3,82e3,35e3,93e3,71e3,89e3,49e3,91e3,80200,86e3,35e3,40050],label:{show:!1,color:"#639"},type:"bar",color:"#7569b3",smooth:!0,itemStyle:{emphasis:{shadowBlur:10,shadowOffsetX:0,shadowOffsetY:-2,shadowColor:"rgba(0, 0, 0, 0.3)"}}}]}),$(window).on("resize",function(){setTimeout(()=>{t.resize()},500)})}let t=document.getElementById("echartPie");if(t){let e=echarts.init(t);e.setOption({color:["#62549c","#7566b5","#7d6cbb","#8877bd","#9181bd","#6957af"],tooltip:{show:!0,backgroundColor:"rgba(0, 0, 0, .8)"},series:[{name:"Sales by Country",type:"pie",radius:"60%",center:["50%","50%"],data:[{value:535,name:"USA"},{value:310,name:"Brazil"},{value:234,name:"France"},{value:155,name:"BD"},{value:130,name:"UK"},{value:348,name:"India"}],itemStyle:{emphasis:{shadowBlur:10,shadowOffsetX:0,shadowColor:"rgba(0, 0, 0, 0.5)"}}}]}),$(window).on("resize",function(){setTimeout(()=>{e.resize()},500)})}let o=document.getElementById("echart1");if(o){let e=echarts.init(o);e.setOption({...echartOptions.lineFullWidth,...{series:[{data:[30,40,20,50,40,80,90],...echartOptions.smoothLine,markArea:{label:{show:!0}},areaStyle:{color:"rgba(102, 51, 153, .2)",origin:"start"},lineStyle:{color:"#663399"},itemStyle:{color:"#663399"}}]}}),$(window).on("resize",function(){setTimeout(()=>{e.resize()},500)})}let a=document.getElementById("echart2");if(a){let e=echarts.init(a);e.setOption({...echartOptions.lineFullWidth,...{series:[{data:[30,10,40,10,40,20,90],...echartOptions.smoothLine,markArea:{label:{show:!0}},areaStyle:{color:"rgba(255, 193, 7, 0.2)",origin:"start"},lineStyle:{color:"#FFC107"},itemStyle:{color:"#FFC107"}}]}}),$(window).on("resize",function(){setTimeout(()=>{e.resize()},500)})}let i=document.getElementById("echart3");if(i){let e=echarts.init(i);e.setOption({...echartOptions.lineNoAxis,...{series:[{data:[40,80,20,90,30,80,40,90,20,80,30,45,50,110,90,145,120,135,120,140],lineStyle:{color:"rgba(102, 51, 153, 0.8)",width:3,...echartOptions.lineShadow},label:{show:!0,color:"#212121"},type:"line",smooth:!0,itemStyle:{borderColor:"rgba(102, 51, 153, 1)"}}]}}),$(window).on("resize",function(){setTimeout(()=>{e.resize()},500)})}});