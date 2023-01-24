function configure() {
  Webcam.set({
    width: 400,
    height: 240,
    image_format: 'jpg',
    jpeg_quality: 90,
  });

  Webcam.attach('#my_camera');
}

function take_snapshot() {
  Webcam.snap(function (data_uri) {
    var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
    document.getElementById('image').value = raw_image_data;
    document.getElementById('myform').submit();
  });
}
