# Herobot App

Herobot is your 24/7 customer service assistant that helps you manage multi-channel customer conversations effortlessly. With support for WhatsApp, WhatsApp Business, Instagram, Facebook Messenger, and TikTok (coming soon), Herobot enables businesses of all sizes to provide instant responses and superior customer service at scale.

❤️ **Support this project**: If you find Herobot helpful, consider [sponsoring the project on GitHub](https://github.com/sponsors/dihak)

## Deployment Options

Herobot is an open-source project that offers flexible deployment options to suit your needs:

1. **Herobot Cloud (herobot.id)**: Coming soon! Our managed cloud solution at [herobot.id](https://herobot.id) will provide a hassle-free setup with automatic updates and maintenance. Perfect for businesses that want to get started quickly without infrastructure management.

2. **Self-Hosting**: Deploy Herobot on your own infrastructure for complete control and customization. Follow our setup guide below to host it on your servers.

Both options provide the same powerful features, letting you choose the deployment that best fits your requirements and privacy needs.

<a href="https://studio.firebase.google.com/import?url=https://github.com/herobot-id/herobot">
  <picture>
    <source
      media="(prefers-color-scheme: dark)"
      srcset="https://cdn.firebasestudio.dev/btn/try_dark_32.svg">
    <source
      media="(prefers-color-scheme: light)"
      srcset="https://cdn.firebasestudio.dev/btn/try_light_32.svg">
    <img
      height="32"
      alt="Try in Firebase Studio"
      src="https://cdn.firebasestudio.dev/btn/try_blue_32.svg">
  </picture>
</a>
<a href="https://gitpod.io/#https://github.com/herobot-id/herobot">
  <img src="https://gitpod.io/button/open-in-gitpod.svg" alt="Open in Gitpod" height="32">
</a>

## Key Features

- **Multi-Channel Support**: Manage all your customer conversations from a single platform across multiple messaging channels
- **Smart Business Tools**: Seamlessly integrate with your existing tools - from shipping cost checks to Google Forms, spreadsheets, and custom API integrations
- **Instant Responses**: Provide 24/7 customer support, qualify leads automatically, and handle routine inquiries while your team focuses on high-value conversations
- **Scalable Solution**: Perfect for both small businesses and large enterprises, with the ability to manage multiple channels and teams from one dashboard

## Setup Guide

To set up the Herobot App locally, follow these steps:

1. **Clone the Repository**:
   - Clone the repository to your local machine using:
     ```sh
     git clone git@github.com:herobot-id/herobot.git
     ```

2. **Set Up Environment Variables**:
   - Copy the `.env.example` file to `.env`:
     ```sh
     cp .env.example .env
     ```

3. **Start Services**
   ```sh
   # Start Docker containers in detached mode
   docker compose up -d

   # Install NPM dependencies
   ./vendor/bin/sail npm install

   # Start Vite development server
   ./vendor/bin/sail npm run dev

   # Start Reverb WebSocket server
   ./vendor/bin/sail artisan reverb:start

   # Start WhatsApp server
   ./vendor/bin/sail artisan whatsapp:start
   ```

4. **Access the Application**:
   - The application will be accessible on port 80. Open your browser and navigate to `http://localhost`.

5. **Stopping Services**:
   ```sh
   # Stop Docker containers
   docker compose down

   # If you need to stop individual services:
   # Stop Vite development server: Ctrl+C in the terminal running npm run dev
   # Stop Reverb WebSocket server: Ctrl+C in the terminal running reverb:start
   # Stop WhatsApp server: Ctrl+C in the terminal running whatsapp:start
   ```

By following these steps, you will have the Herobot App up and running on your local machine, ready for development and testing.

