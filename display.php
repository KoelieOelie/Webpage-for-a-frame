<!DOCTYPE html>
<html>
<head>
<title>My A-Frame Scene</title>
<script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
<script src="https://unpkg.com/aframe-html-shader@0.2.0/dist/aframe-html-shader.min.js"></script>
</head>

<body>
<a-scene>
  <a-entity geometry="primitive: box" material="shader: html; target: #htmlElement"></a-entity>
</a-scene>

<div style="width: 100%; height: 100%; position: fixed; left: 0; top: 0; z-index: -1; overflow: hidden">
  <div id="htmlElement" style="background: #F8F8F8; color: #333; font-size: 48px">HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH</div>
</div>

</body>
</html>
