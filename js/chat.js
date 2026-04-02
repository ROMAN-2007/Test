const chatIcon = document.querySelector('aside a[href="#chatBox"]');
const chatBox = document.getElementById('chatBox');
const closeBtn = document.getElementById('closeChat');
const sendBtn = document.getElementById('sendBtn');
const chatInputField = document.getElementById('chatInputField');
const chatMessages = document.getElementById('chatMessages');


chatIcon.addEventListener('click', (e) => {
  e.preventDefault();
  chatBox.classList.toggle('hidden');
});

closeBtn.addEventListener('click', () => {
  chatBox.classList.add('hidden');
});


sendBtn.addEventListener('click', () => {
  const message = chatInputField.value.trim();
  if (message !== "") {
    const msgDiv = document.createElement('div');
    msgDiv.classList.add('message', 'user2');
    msgDiv.textContent = "Moi😀: " + message;
    chatMessages.appendChild(msgDiv);
    chatInputField.value = "";
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }
});