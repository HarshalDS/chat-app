
// const socket = io('http://localhost:8000');

// const form = document.getElementById('send-container');
// const messageInput = document.getElementById('messageInp');
// const messageContainer = document.querySelector('.container');

// var audio = new Audio('tune.mp3');
// const append = (message, position) => {
//     const messageElement = document.createElement('div');
//     messageElement.innerText = message;
//     messageElement.classList.add('message', position);
//     messageContainer.append(messageElement);

//     if(position == 'left'){
//         audio.play();
//     }
    
// }

//  const name = prompt("Enter your name to join");
// socket.emit('new-user-joined', name);

// socket.on('user-joined', name => {
//     append(`${name} joined the chat`, 'right');
// });

// socket.on('receive', data => {
//     append(`${data.name}: ${data.message}`, 'left');
// });

// socket.on('left', name => {
//     append(`${name} left the chat`, 'right');
// });

// form.addEventListener('submit', (e) => {
//     e.preventDefault(); //no page reload

//     const message = messageInput.value;
//     append(`You: ${message}`, 'right');
//     socket.emit('send', message);
//     messageInput.v
//     alue = '';
// });

const socket = io('http://localhost:8000');

const form = document.getElementById('send-container');
const messageInput = document.getElementById('messageInp');
const messageContainer = document.querySelector('.container');

var audio = new Audio('tune.mp3');

const append = (message, position) => {
    const messageElement = document.createElement('div');
    messageElement.innerText = message;
    messageElement.classList.add('message', position);
    messageContainer.append(messageElement);

    if (position === 'left') {
        audio.play();
    }
};

const name = prompt("Enter your name to join");
socket.emit('new-user-joined', name);

socket.on('user-joined', name => {
    append(`${name} joined the chat`, 'right');
});

socket.on('receive', data => {
    append(`${data.name}: ${data.message}`, 'left');
});

socket.on('left', name => {
    append(`${name} left the chat`, 'right');
});

form.addEventListener('submit', (e) => {
    e.preventDefault(); // prevents page reload

    const message = messageInput.value;
    append(`You: ${message}`, 'right');
    socket.emit('send', message);
    messageInput.value = ''; // corrected line break issue
});
