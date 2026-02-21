
  <script>
    const ChChatWindow = document.getElementById('ChChatWindow');
    const ChChatTrigger = document.getElementById('ChChatTrigger');
    const ChMessagesArea = document.getElementById('ChMessagesArea');
    const ChInput = document.getElementById('ChInput');

    function ChToggleChat() {
      ChChatWindow.classList.toggle('ChOpen');
      ChChatTrigger.classList.toggle('ChActive');

      if (ChChatWindow.classList.contains('ChOpen')) {
        ChInput.focus();
      }
    }

    function ChAddMessage(message, isUser = false) {
      const time = new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });

      const messageDiv = document.createElement('div');
      messageDiv.className = `ChMessage ${isUser ? 'ChMessageUser' : 'ChMessageBot'}`;

      messageDiv.innerHTML = `
        <div class="ChMessageAvatar">
          <i class="fas ${isUser ? 'fa-user' : 'fa-robot'}"></i>
        </div>
        <div class="ChMessageContent">
          <div class="ChMessageBubble">${message}</div>
          <div class="ChMessageTime">${time}</div>
        </div>
      `;

      ChMessagesArea.appendChild(messageDiv);
      ChMessagesArea.scrollTop = ChMessagesArea.scrollHeight;
    }

    function ChShowTyping() {
      const typingDiv = document.createElement('div');
      typingDiv.className = 'ChTypingIndicator ChActive';
      typingDiv.id = 'ChTyping';
      typingDiv.innerHTML = `
        <div class="ChMessageAvatar">
          <i class="fas fa-robot"></i>
        </div>
        <div class="ChTypingDots">
          <div class="ChTypingDot"></div>
          <div class="ChTypingDot"></div>
          <div class="ChTypingDot"></div>
        </div>
      `;
      ChMessagesArea.appendChild(typingDiv);
      ChMessagesArea.scrollTop = ChMessagesArea.scrollHeight;
    }

    function ChHideTyping() {
      const typing = document.getElementById('ChTyping');
      if (typing) typing.remove();
    }

    function ChSendMessage() {
      const message = ChInput.value.trim();
      if (!message) return;

      ChAddMessage(message, true);
      ChInput.value = '';

      ChShowTyping();

      setTimeout(() => {
        ChHideTyping();
        const responses = [
          "That's a great question! Let me help you with that. 🎯",
          "I understand! Here's what I can suggest... 💡",
          "Thanks for reaching out! I'm here to assist. 🌟",
          "Absolutely! I'd be happy to help with that. ✨"
        ];
        const response = responses[Math.floor(Math.random() * responses.length)];
        ChAddMessage(response);
      }, 1500);
    }

    function ChSendQuickReply(text) {
      ChAddMessage(text, true);
      ChShowTyping();

      setTimeout(() => {
        ChHideTyping();
        let response = '';
        if (text === 'Get Started') {
          response = "Great! Let's get you started. What would you like to know first? 🚀";
        } else if (text === 'Learn More') {
          response = "I'd love to tell you more! What specific area interests you? 📚";
        } else {
          response = "Our support team is ready to assist you 24/7! How can we help? 🎧";
        }
        ChAddMessage(response);
      }, 1500);
    }

    ChInput.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        ChSendMessage();
      }
    });
  </script>

    <!--jquery js-->
    <script src="{{ asset('FrontendAssets/js/jquery.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('FrontendAssets/js/bootstrap.min.js') }}"></script>
    <!--owl-carousal-->
    <script src="{{ asset('FrontendAssets/js/owl.carousel.min.js') }}"></script>
    <!--progress-bar js-->
    <script src="{{ asset('FrontendAssets/js/progressbar.js') }}"></script>
    <!--isotope js-->
    <script src="{{ asset('FrontendAssets/js/isotope.pkgd.min.js') }}"></script>
    <!--countTo js-->
    <script src="{{ asset('FrontendAssets/js/jquery.countTo.min.js') }}"></script>
    <!--Maginfic-Popup js-->
    <script src="{{ asset('FrontendAssets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Animation JS -->
    <script src="{{ asset('FrontendAssets/js/wow.min.js') }}"></script>
    <!-- Simplebar js -->
    <script src="{{ asset('FrontendAssets/js/simplebar.min.js') }}"></script>
    <!-- Slick Slider js -->
    <script src="{{ asset('FrontendAssets/js/slick.js') }}"></script>
    <!-- Circluar Progressbar js -->
    <script src="{{ asset('FrontendAssets/js/circle-progress.min.js') }}"></script>
    <!-- Rev-Slider -->
    <script src="{{ asset('FrontendAssets/rev/js/rbtools.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/rev/js/rs6.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/rev-custom.js') }}"></script>
    <!--custom js-->

    <script src="{{ asset('FrontendAssets/js/custom.js') }}"></script>


    