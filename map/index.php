<?
  include "lib.php";
?>
<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script>
      (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
        key: "AIzaSyDu-qa6aNU7a_aWl_ZbtrDTE9pu8tkuaEk",
      });
    </script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu-qa6aNU7a_aWl_ZbtrDTE9pu8tkuaEk&callback=initMap">
    </script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script>
      let map;

      async function initMap() {
        const { Map } = await google.maps.importLibrary("maps");

        map = new Map(document.getElementById("map"), {
          center: { lat: 37.6806835, lng: 126.7701525 },
          zoom: 8,
        });
      <?
        $query = "SELECT * FROM map";
        $result = mysqli_query($connect, $query);

        while($data = mysqli_fetch_array($result)){
      ?>
          const myLatLng<?=$data['idx']?> = { lat: <?=$data['lat']?>, lng: <?=$data['lng']?> };

          new google.maps.Marker({
            position: myLatLng<?=$data['idx']?>,
            map,
            animation: google.maps.Animation.DROP,
            title: "<?=$data['title']?>",
          });
    <?  } ?>
      }

      initMap();
    </script>
  </head>
  <body>
    <form action="save.php" method="post">
      <div>
        <input type="text" name="lat" placeholder="위도"/>
        <input type="text" name="lng" placeholder="경도"/>
        <input type="text" name="title" placeholder="이름"/>
        <button type="submit">저장</button>
      </div>
    </form>
    <div id="map"></div>
  </body>
</html>