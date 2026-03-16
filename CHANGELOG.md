# Changelog

## 0.2.0

### Fixed

- **Disabled WordPress emoji detection script.** The emoji script uses `Worker`, `OffscreenCanvas`, and `sessionStorage` which can throw unhandled errors in Android WebView (Instagram in-app browser). Recranet's hosted pages do not include this script.

## 0.1.0

- Initial release.
