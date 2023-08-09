# OS detect and Redirect

"OS detect and Redirect" is a simple script that detects the user's operating system (Desktop, Android, or iOS) and redirects them to a specific URL based on their OS. This can be especially useful for websites that want to guide users to platform-specific content or applications.

## Features

- Server-side detection using PHP.
- Client-side detection using JavaScript.
- Supports redirection for:
  - Desktop (all platforms)
  - Android (both mobile and tablet)
  - iOS (both iPhone and iPad)

## Installation

1. Clone this repository:
   ```bash
   git clone https://github.com/AsifKibria/OS-detect-and-Redirect
   ```

2. Navigate to the project directory:
   ```bash
   cd OS-detect-and-Redirect
   ```

3. Upload the PHP or HTML file (depending on which method you're using) to your server.

## Usage

### PHP Detection

1. Edit the `redirect.php` file.
2. Replace the placeholder URLs (`https://ios.example.com`, `https://android.example.com`, and `https://desktop.example.com`) with your desired redirection URLs.
3. Include or require the `redirect.php` at the beginning of your PHP script or use it as your landing page.

### JavaScript Detection

1. Edit the `redirect.html` file.
2. Replace the placeholder URLs (`https://ios.example.com`, `https://android.example.com`, and `https://desktop.example.com`) with your desired redirection URLs.
3. Use the `redirect.html` as your landing page or embed the JavaScript section in your existing HTML file.

## How It Works

- The PHP method uses the `$_SERVER['HTTP_USER_AGENT']` variable to detect the user agent string and determine the user's OS.
- The JavaScript method uses the `window.navigator.userAgent` property to achieve the same goal on the client side.

## Limitations

- The JavaScript method is client-side and will redirect the user after the initial page has started loading, which might not be as seamless as the PHP method.
- User agent strings can be spoofed, so this method is not 100% foolproof. However, for most general use cases, it should work effectively.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

[MIT](https://choosealicense.com/licenses/mit/)
