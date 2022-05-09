<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vue.js + php</title>
</head>
<body>

  <div id="app">
    <ul>
      <li v-for="elem in arrayNumeri">{{ elem }}</li>
    </ul>
  </div>

<!-- Vue 2 cdn -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<!-- Axios cdn -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- Nostro main js -->
<script src="./js/main.js"></script>
</body>
</html>
