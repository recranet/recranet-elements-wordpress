# Changelog

## 0.4.0

### Reverted

- **Reverted disabled WordPress emoji detection script.** The emoji script does not cause issues in Android WebView / Instagram in-app browser.

## 0.3.0

### Fixed

- **Disabled WordPress speculative loading / link prefetching.** The speculation rules script uses `IntersectionObserver` on scroll which can throw unhandled errors in Android WebView (Instagram in-app browser). Recranet's hosted pages do not include this script. Speculative loading was introduced in WordPress 6.8.

## 0.2.0

### Fixed

- **Disabled WordPress emoji detection script.** The emoji script uses `Worker`, `OffscreenCanvas`, and `sessionStorage` which can throw unhandled errors in Android WebView (Instagram in-app browser). Recranet's hosted pages do not include this script.

## 0.1.0

- Initial release.
