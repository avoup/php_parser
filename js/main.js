// function hasGetUserMedia() {
//   return !!(navigator.mediaDevices &&
//     navigator.mediaDevices.getUserMedia);
// }
//
// if (hasGetUserMedia()) {
//   // Good to go!
//   console.log('good to go')
// } else {
//   alert('getUserMedia() is not supported by your browser');
// }
//
//
// const constraints = {
//   video: true
// };
//
// const video = document.querySelector('video');
//
// const hdConstraints = {
//   video: {width: {min: 1280}, height: {min: 720}}
// };
//
// navigator.mediaDevices.getUserMedia(hdConstraints).
//   then((stream) => {video.srcObject = stream});
//
//   // asdsa
//
//   const videoElement = document.querySelector('video');
// const audioSelect = document.querySelector('select#audioSource');
// const videoSelect = document.querySelector('select#videoSource');
//
// navigator.mediaDevices.enumerateDevices()
//   .then(gotDevices).then(getStream).catch(handleError);
//
// audioSelect.onchange = getStream;
// videoSelect.onchange = getStream;
//
// function gotDevices(deviceInfos) {
//   for (let i = 0; i !== deviceInfos.length; ++i) {
//     const deviceInfo = deviceInfos[i];
//     const option = document.createElement('option');
//     option.value = deviceInfo.deviceId;
//     if (deviceInfo.kind === 'audioinput') {
//       option.text = deviceInfo.label ||
//         'microphone ' + (audioSelect.length + 1);
//       audioSelect.appendChild(option);
//     } else if (deviceInfo.kind === 'videoinput') {
//       option.text = deviceInfo.label || 'camera ' +
//         (videoSelect.length + 1);
//       videoSelect.appendChild(option);
//     } else {
//       console.log('Found another kind of device: ', deviceInfo);
//     }
//   }
// }
//
// function getStream() {
//   if (window.stream) {
//     window.stream.getTracks().forEach(function(track) {
//       track.stop();
//     });
//   }
//
//   const constraints = {
//     audio: {
//       deviceId: {exact: audioSelect.value}
//     },
//     video: {
//       deviceId: {exact: videoSelect.value}
//     }
//   };
//
//   navigator.mediaDevices.getUserMedia(constraints).
//     then(gotStream).catch(handleError);
// }
//
// function gotStream(stream) {
//   window.stream = stream; // make stream available to console
//   videoElement.srcObject = stream;
// }
//
// function handleError(error) {
//   console.error('Error: ', error);
// }
