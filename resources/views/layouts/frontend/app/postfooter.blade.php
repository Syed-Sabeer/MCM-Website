 <!-- Back To Top -->
    <div id="back-to-top">
      <a class="top" id="top" href="#top">
        <i class="ion-ios-arrow-up"></i>
      </a>
    </div>

  <div class="ChContainer">
    <div class="ChChatWindow" id="ChChatWindow">
      <div class="ChHeader">
        <div class="ChHeaderContent">
          <div class="ChAvatar">
            <i class="fas fa-robot"></i>
          </div>
          <div class="ChHeaderText">
            <h3>AI Assistant</h3>
            <p><span class="ChOnlineIndicator"></span> Always here to help</p>
          </div>
        </div>
      </div>

      <div class="ChMessagesArea" id="ChMessagesArea">
        <div class="ChMessage ChMessageBot">
          <div class="ChMessageAvatar">
            <i class="fas fa-robot"></i>
          </div>
          <div class="ChMessageContent">
            <div class="ChMessageBubble">
              Hello! 👋 I'm your AI assistant. How can I help you today?
            </div>
            <div class="ChMessageTime">Just now</div>
          </div>
        </div>
      </div>

      <div class="ChQuickReplies">
        <button class="ChQuickReply" onclick="ChSendQuickReply('Get Started')">
          <i class="fas fa-rocket"></i>
          <span>Get Started</span>
        </button>
        <button class="ChQuickReply" onclick="ChSendQuickReply('Learn More')">
          <i class="fas fa-lightbulb"></i>
          <span>Learn More</span>
        </button>
        <button class="ChQuickReply" onclick="ChSendQuickReply('Contact Support')">
          <i class="fas fa-headset"></i>
          <span>Support</span>
        </button>
      </div>

      <div class="ChInputArea">
        <div class="ChInputWrapper">
          <input type="text" class="ChInput" id="ChInput" placeholder="Type your message...">
          <button class="ChSendButton" id="ChSendButton" onclick="ChSendMessage()">
            <i class="fas fa-paper-plane"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <button class="ChChatTrigger" id="ChChatTrigger" onclick="ChToggleChat()">
    <i class="fas fa-comment-dots"></i>
    <i class="fas fa-times"></i>
  </button>
