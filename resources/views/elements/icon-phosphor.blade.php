@extends('layouts.main')

@section('title', 'Phosphor Icons Set')
@section('breadcrumb-item', 'Icons')

@section('breadcrumb-item-active', 'Phosphor Icons')

@section('css')
@endsection

@section('content')
      <!--[ Main Content ] start-->
      <div class="row">
        <!--[ phosphor-icon ] start-->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Phosphor</h5>
              <p>Use icon with <code>&lt;i class="&lt;&lt; Copied code &gt;&gt;"&gt;</code> in you html code </p>
            </div>
            <div class="card-body text-center">
              <div class="row justify-content-center">
                <div class="col-sm-6">
                  <input type="text" id="icon-search" class="form-control mb-4" placeholder="search . . ">
                </div>
              </div>
              <div class="i-main" id="icon-wrapper"></div>
            </div>
          </div>
        </div>
        <!--[ phosphor-icon ] end-->
      </div>
      <!--[ Main Content ] end-->
@endsection

@section('scripts')
  <!-- [Page Specific JS] start -->
  <script src="{{ URL::asset('build/js/plugins/clipboard.min.js') }}"></script>
  <script>
    var icon_list = [
      "ph-address-book", "ph-airplane", "ph-airplane-in-flight", "ph-airplane-landing", "ph-airplane-takeoff", "ph-airplane-tilt", "ph-airplay", "ph-air-traffic-control", "ph-alarm", "ph-alien", "ph-align-bottom", "ph-align-bottom-simple", "ph-align-center-horizontal", "ph-align-center-horizontal-simple", "ph-align-center-vertical", "ph-align-center-vertical-simple", "ph-align-left", "ph-align-left-simple", "ph-align-right", "ph-align-right-simple", "ph-align-top", "ph-align-top-simple", "ph-amazon-logo", "ph-anchor", "ph-anchor-simple", "ph-android-logo", "ph-angular-logo", "ph-aperture", "ph-apple-logo", "ph-apple-podcasts-logo", "ph-app-store-logo", "ph-app-window", "ph-archive-box", "ph-archive", "ph-archive-tray", "ph-armchair", "ph-arrow-arc-left", "ph-arrow-arc-right", "ph-arrow-bend-double-up-left", "ph-arrow-bend-double-up-right", "ph-arrow-bend-down-left", "ph-arrow-bend-down-right", "ph-arrow-bend-left-down", "ph-arrow-bend-left-up", "ph-arrow-bend-right-down", "ph-arrow-bend-right-up", "ph-arrow-bend-up-left", "ph-arrow-bend-up-right", "ph-arrow-circle-down", "ph-arrow-circle-down-left", "ph-arrow-circle-down-right", "ph-arrow-circle-left", "ph-arrow-circle-right", "ph-arrow-circle-up", "ph-arrow-circle-up-left", "ph-arrow-circle-up-right", "ph-arrow-clockwise", "ph-arrow-counter-clockwise", "ph-arrow-down", "ph-arrow-down-left", "ph-arrow-down-right", "ph-arrow-elbow-down-left", "ph-arrow-elbow-down-right", "ph-arrow-elbow-left-down", "ph-arrow-elbow-left", "ph-arrow-elbow-left-up", "ph-arrow-elbow-right-down", "ph-arrow-elbow-right", "ph-arrow-elbow-right-up", "ph-arrow-elbow-up-left", "ph-arrow-elbow-up-right", "ph-arrow-fat-down", "ph-arrow-fat-left", "ph-arrow-fat-line-down", "ph-arrow-fat-line-left", "ph-arrow-fat-line-right", "ph-arrow-fat-lines-down", "ph-arrow-fat-lines-left", "ph-arrow-fat-lines-right", "ph-arrow-fat-lines-up", "ph-arrow-fat-line-up", "ph-arrow-fat-right", "ph-arrow-fat-up", "ph-arrow-left", "ph-arrow-line-down", "ph-arrow-line-down-left", "ph-arrow-line-down-right", "ph-arrow-line-left", "ph-arrow-line-right", "ph-arrow-line-up", "ph-arrow-line-up-left", "ph-arrow-line-up-right", "ph-arrow-right", "ph-arrows-clockwise", "ph-arrows-counter-clockwise", "ph-arrows-down-up", "ph-arrows-horizontal", "ph-arrows-in-cardinal", "ph-arrows-in", "ph-arrows-in-line-horizontal", "ph-arrows-in-line-vertical", "ph-arrows-in-simple", "ph-arrows-left-right", "ph-arrows-merge", "ph-arrows-out-cardinal", "ph-arrows-out", "ph-arrows-out-line-horizontal", "ph-arrows-out-line-vertical", "ph-arrows-out-simple", "ph-arrow-square-down", "ph-arrow-square-down-left", "ph-arrow-square-down-right", "ph-arrow-square-in", "ph-arrow-square-left", "ph-arrow-square-out", "ph-arrow-square-right", "ph-arrow-square-up", "ph-arrow-square-up-left", "ph-arrow-square-up-right", "ph-arrows-split", "ph-arrows-vertical", "ph-arrow-u-down-left", "ph-arrow-u-down-right", "ph-arrow-u-left-down", "ph-arrow-u-left-up", "ph-arrow-up", "ph-arrow-up-left", "ph-arrow-up-right", "ph-arrow-u-right-down", "ph-arrow-u-right-up", "ph-arrow-u-up-left", "ph-arrow-u-up-right", "ph-article", "ph-article-medium", "ph-article-ny-times", "ph-asterisk", "ph-asterisk-simple", "ph-at", "ph-atom", "ph-baby", "ph-backpack", "ph-backspace", "ph-bag", "ph-bag-simple", "ph-balloon", "ph-bandaids", "ph-bank", "ph-barbell", "ph-barcode", "ph-barricade", "ph-baseball-cap", "ph-baseball", "ph-basketball", "ph-basket", "ph-bathtub", "ph-battery-charging", "ph-battery-charging-vertical", "ph-battery-empty", "ph-battery-full", "ph-battery-high", "ph-battery-low", "ph-battery-medium", "ph-battery-plus", "ph-battery-plus-vertical", "ph-battery-vertical-empty", "ph-battery-vertical-full", "ph-battery-vertical-high", "ph-battery-vertical-low", "ph-battery-vertical-medium", "ph-battery-warning", "ph-battery-warning-vertical", "ph-bed", "ph-beer-bottle", "ph-beer-stein", "ph-behance-logo", "ph-bell", "ph-bell-ringing", "ph-bell-simple", "ph-bell-simple-ringing", "ph-bell-simple-slash", "ph-bell-simple-z", "ph-bell-slash", "ph-bell-z", "ph-bezier-curve", "ph-bicycle", "ph-binoculars", "ph-bird", "ph-bluetooth-connected", "ph-bluetooth", "ph-bluetooth-slash", "ph-bluetooth-x", "ph-boat", "ph-bone", "ph-book-bookmark", "ph-book", "ph-bookmark", "ph-bookmarks", "ph-bookmark-simple", "ph-bookmarks-simple", "ph-book-open", "ph-book-open-text", "ph-books", "ph-boot", "ph-bounding-box", "ph-bowl-food", "ph-brackets-angle", "ph-brackets-curly", "ph-brackets-round", "ph-brackets-square", "ph-brain", "ph-brandy", "ph-bridge", "ph-briefcase", "ph-briefcase-metal", "ph-broadcast", "ph-broom", "ph-browser", "ph-browsers", "ph-bug-beetle", "ph-bug-droid", "ph-bug", "ph-buildings", "ph-bus", "ph-butterfly", "ph-cactus", "ph-cake", "ph-calculator", "ph-calendar-blank", "ph-calendar-check", "ph-calendar", "ph-calendar-plus", "ph-calendar-x", "ph-call-bell", "ph-camera", "ph-camera-plus", "ph-camera-rotate", "ph-camera-slash", "ph-campfire", "ph-cardholder", "ph-cards", "ph-car", "ph-caret-circle-double-down", "ph-caret-circle-double-left", "ph-caret-circle-double-right", "ph-caret-circle-double-up", "ph-caret-circle-down", "ph-caret-circle-left", "ph-caret-circle-right", "ph-caret-circle-up-down", "ph-caret-circle-up", "ph-caret-double-down", "ph-caret-double-left", "ph-caret-double-right", "ph-caret-double-up", "ph-caret-down", "ph-caret-left", "ph-caret-right", "ph-caret-up-down", "ph-caret-up", "ph-car-profile", "ph-carrot", "ph-car-simple", "ph-cassette-tape", "ph-castle-turret", "ph-cat", "ph-cell-signal-full", "ph-cell-signal-high", "ph-cell-signal-low", "ph-cell-signal-medium", "ph-cell-signal-none-duotone", "ph-cell-signal-slash", "ph-cell-signal-x", "ph-certificate", "ph-chair", "ph-chalkboard", "ph-chalkboard-simple", "ph-chalkboard-teacher", "ph-champagne", "ph-charging-station", "ph-chart-bar", "ph-chart-bar-horizontal", "ph-chart-donut", "ph-chart-line-down", "ph-chart-line", "ph-chart-line-up", "ph-chart-pie", "ph-chart-pie-slice", "ph-chart-polar", "ph-chart-scatter", "ph-chat-centered-dots", "ph-chat-centered", "ph-chat-centered-text", "ph-chat-circle-dots", "ph-chat-circle", "ph-chat-circle-text", "ph-chat-dots", "ph-chat", "ph-chats-circle", "ph-chats", "ph-chats-teardrop", "ph-chat-teardrop-dots", "ph-chat-teardrop", "ph-chat-teardrop-text", "ph-chat-text", "ph-check-circle", "ph-check", "ph-check-fat", "ph-checks", "ph-check-square", "ph-check-square-offset", "ph-church", "ph-circle-dashed", "ph-circle", "ph-circle-half", "ph-circle-half-tilt", "ph-circle-notch", "ph-circles-four", "ph-circles-three", "ph-circles-three-plus", "ph-circuitry", "ph-clipboard", "ph-clipboard-text", "ph-clock-afternoon", "ph-clock-clockwise", "ph-clock-countdown", "ph-clock-counter-clockwise", "ph-clock", "ph-closed-captioning", "ph-cloud-arrow-down", "ph-cloud-arrow-up", "ph-cloud-check", "ph-cloud", "ph-cloud-fog", "ph-cloud-lightning", "ph-cloud-moon", "ph-cloud-rain", "ph-cloud-slash", "ph-cloud-snow", "ph-cloud-sun", "ph-cloud-warning", "ph-cloud-x", "ph-club", "ph-coat-hanger", "ph-coda-logo", "ph-code-block", "ph-code", "ph-codepen-logo", "ph-codesandbox-logo", "ph-code-simple", "ph-coffee", "ph-coin", "ph-coins", "ph-coin-vertical", "ph-columns", "ph-command", "ph-compass", "ph-compass-tool", "ph-computer-tower", "ph-confetti", "ph-contactless-payment", "ph-control", "ph-cookie", "ph-cooking-pot", "ph-copy", "ph-copyleft", "ph-copyright", "ph-copy-simple", "ph-corners-in", "ph-corners-out", "ph-couch", "ph-cpu", "ph-credit-card", "ph-crop", "ph-cross", "ph-crosshair", "ph-crosshair-simple", "ph-crown", "ph-crown-simple", "ph-cube", "ph-cube-focus", "ph-cube-transparent", "ph-currency-btc", "ph-currency-circle-dollar", "ph-currency-cny", "ph-currency-dollar", "ph-currency-dollar-simple", "ph-currency-eth", "ph-currency-eur", "ph-currency-gbp", "ph-currency-inr", "ph-currency-jpy", "ph-currency-krw", "ph-currency-kzt", "ph-currency-ngn", "ph-currency-rub", "ph-cursor-click", "ph-cursor", "ph-cursor-text", "ph-cylinder", "ph-database", "ph-desktop", "ph-desktop-tower", "ph-detective", "ph-device-mobile-camera", "ph-device-mobile", "ph-device-mobile-speaker", "ph-devices", "ph-device-tablet-camera", "ph-device-tablet", "ph-device-tablet-speaker", "ph-dev-to-logo", "ph-diamond", "ph-diamonds-four", "ph-dice-five", "ph-dice-four", "ph-dice-one", "ph-dice-six", "ph-dice-three", "ph-dice-two", "ph-disc", "ph-discord-logo", "ph-divide", "ph-dna", "ph-dog", "ph-door", "ph-door-open", "ph-dot", "ph-dot-outline", "ph-dots-nine", "ph-dots-six", "ph-dots-six-vertical", "ph-dots-three-circle", "ph-dots-three-circle-vertical", "ph-dots-three", "ph-dots-three-outline", "ph-dots-three-outline-vertical", "ph-dots-three-vertical", "ph-download", "ph-download-simple", "ph-dress", "ph-dribbble-logo", "ph-dropbox-logo", "ph-drop", "ph-drop-half-bottom", "ph-drop-half", "ph-ear", "ph-ear-slash", "ph-egg-crack", "ph-egg", "ph-eject", "ph-eject-simple", "ph-elevator", "ph-engine", "ph-envelope", "ph-envelope-open", "ph-envelope-simple", "ph-envelope-simple-open", "ph-equalizer", "ph-equals", "ph-eraser", "ph-escalator-down", "ph-escalator-up", "ph-exam", "ph-exclude", "ph-exclude-square", "ph-export", "ph-eye-closed", "ph-eyedropper", "ph-eyedropper-sample", "ph-eye", "ph-eyeglasses", "ph-eye-slash", "ph-facebook-logo", "ph-face-mask", "ph-factory", "ph-faders", "ph-faders-horizontal", "ph-fan", "ph-fast-forward-circle", "ph-fast-forward", "ph-feather", "ph-figma-logo", "ph-file-archive", "ph-file-arrow-down", "ph-file-arrow-up", "ph-file-audio", "ph-file-cloud", "ph-file-code", "ph-file-css", "ph-file-csv", "ph-file-dashed", "ph-file-dotted", "ph-file-doc", "ph-file", "ph-file-html", "ph-file-image", "ph-file-jpg", "ph-file-js", "ph-file-jsx", "ph-file-lock", "ph-file-magnifying-glass", "ph-file-search", "ph-file-minus", "ph-file-pdf", "ph-file-plus", "ph-file-png", "ph-file-ppt", "ph-file-rs", "ph-files", "ph-file-sql", "ph-file-svg", "ph-file-text", "ph-file-ts", "ph-file-tsx", "ph-file-video", "ph-file-vue", "ph-file-x", "ph-file-xls", "ph-file-zip", "ph-film-reel", "ph-film-script", "ph-film-slate", "ph-film-strip", "ph-fingerprint", "ph-fingerprint-simple", "ph-finn-the-human", "ph-fire", "ph-fire-extinguisher", "ph-fire-simple", "ph-first-aid", "ph-first-aid-kit", "ph-fish", "ph-fish-simple", "ph-flag-banner", "ph-flag-checkered", "ph-flag", "ph-flag-pennant", "ph-flame", "ph-flashlight", "ph-flask", "ph-floppy-disk-back", "ph-floppy-disk", "ph-flow-arrow", "ph-flower", "ph-flower-lotus", "ph-flower-tulip", "ph-flying-saucer", "ph-folder-dashed", "ph-folder-dotted", "ph-folder", "ph-folder-lock", "ph-folder-minus", "ph-folder-notch", "ph-folder-notch-minus", "ph-folder-notch-open", "ph-folder-notch-plus", "ph-folder-open", "ph-folder-plus", "ph-folders", "ph-folder-simple-dashed", "ph-folder-simple-dotted", "ph-folder-simple", "ph-folder-simple-lock", "ph-folder-simple-minus", "ph-folder-simple-plus", "ph-folder-simple-star", "ph-folder-simple-user", "ph-folder-star", "ph-folder-user", "ph-football", "ph-footprints", "ph-fork-knife", "ph-frame-corners", "ph-framer-logo", "ph-function", "ph-funnel", "ph-funnel-simple", "ph-game-controller", "ph-garage", "ph-gas-can", "ph-gas-pump", "ph-gauge", "ph-gavel", "ph-gear", "ph-gear-fine", "ph-gear-six", "ph-gender-female", "ph-gender-intersex", "ph-gender-male", "ph-gender-neuter", "ph-gender-nonbinary", "ph-gender-transgender", "ph-ghost", "ph-gif", "ph-gift", "ph-git-branch", "ph-git-commit", "ph-git-diff", "ph-git-fork", "ph-github-logo", "ph-gitlab-logo", "ph-gitlab-logo-simple", "ph-git-merge", "ph-git-pull-request", "ph-globe", "ph-globe-hemisphere-east", "ph-globe-hemisphere-west", "ph-globe-simple", "ph-globe-stand", "ph-goggles", "ph-goodreads-logo", "ph-google-cardboard-logo", "ph-google-chrome-logo", "ph-google-drive-logo", "ph-google-logo", "ph-google-photos-logo", "ph-google-play-logo", "ph-google-podcasts-logo", "ph-gradient", "ph-graduation-cap", "ph-grains", "ph-grains-slash", "ph-graph", "ph-grid-four", "ph-grid-nine", "ph-guitar", "ph-hamburger", "ph-hammer", "ph-handbag", "ph-handbag-simple", "ph-hand-coins", "ph-hand", "ph-hand-eye", "ph-hand-fist", "ph-hand-grabbing", "ph-hand-heart", "ph-hand-palm", "ph-hand-pointing", "ph-hands-clapping", "ph-handshake", "ph-hand-soap", "ph-hands-praying", "ph-hand-swipe-left", "ph-hand-swipe-right", "ph-hand-tap", "ph-hand-waving", "ph-hard-drive", "ph-hard-drives", "ph-hash", "ph-hash-straight", "ph-headlights", "ph-headphones", "ph-headset", "ph-heartbeat", "ph-heart-break", "ph-heart", "ph-heart-half", "ph-heart-straight-break", "ph-heart-straight", "ph-hexagon", "ph-high-heel", "ph-highlighter-circle", "ph-hoodie", "ph-horse", "ph-hourglass", "ph-hourglass-high", "ph-hourglass-low", "ph-hourglass-medium", "ph-hourglass-simple", "ph-hourglass-simple-high", "ph-hourglass-simple-low", "ph-hourglass-simple-medium", "ph-house", "ph-house-line", "ph-house-simple", "ph-ice-cream", "ph-identification-badge", "ph-identification-card", "ph-image", "ph-images", "ph-image-square", "ph-images-square", "ph-infinity", "ph-info", "ph-instagram-logo", "ph-intersect", "ph-intersect-square", "ph-intersect-three", "ph-jeep", "ph-kanban", "ph-keyboard", "ph-key", "ph-keyhole", "ph-key-return", "ph-knife", "ph-ladder", "ph-ladder-simple", "ph-lamp", "ph-laptop", "ph-layout", "ph-leaf", "ph-lifebuoy", "ph-lightbulb", "ph-lightbulb-filament", "ph-lighthouse", "ph-lightning-a", "ph-lightning", "ph-lightning-slash", "ph-line-segment", "ph-line-segments", "ph-link-break", "ph-link", "ph-linkedin-logo", "ph-link-simple-break", "ph-link-simple", "ph-link-simple-horizontal-break", "ph-link-simple-horizontal", "ph-linux-logo", "ph-list-bullets", "ph-list-checks", "ph-list-dashes", "ph-list", "ph-list-magnifying-glass", "ph-list-numbers", "ph-list-plus", "ph-lock", "ph-lockers", "ph-lock-key", "ph-lock-key-open", "ph-lock-laminated", "ph-lock-laminated-open", "ph-lock-open", "ph-lock-simple", "ph-lock-simple-open", "ph-magic-wand", "ph-magnet", "ph-magnet-straight", "ph-magnifying-glass", "ph-magnifying-glass-minus", "ph-magnifying-glass-plus", "ph-map-pin", "ph-map-pin-line", "ph-map-trifold", "ph-marker-circle", "ph-martini", "ph-mask-happy", "ph-mask-sad", "ph-math-operations", "ph-medal", "ph-medal-military", "ph-medium-logo", "ph-megaphone", "ph-megaphone-simple", "ph-messenger-logo", "ph-meta-logo", "ph-metronome", "ph-microphone", "ph-microphone-slash", "ph-microphone-stage", "ph-microsoft-excel-logo", "ph-microsoft-outlook-logo", "ph-microsoft-powerpoint-logo", "ph-microsoft-teams-logo", "ph-microsoft-word-logo", "ph-minus-circle", "ph-minus", "ph-minus-square", "ph-money", "ph-monitor", "ph-monitor-play", "ph-moon", "ph-moon-stars", "ph-moped", "ph-moped-front", "ph-mosque", "ph-motorcycle", "ph-mountains", "ph-mouse", "ph-mouse-simple", "ph-music-note", "ph-music-notes", "ph-music-note-simple", "ph-music-notes-plus", "ph-music-notes-simple", "ph-navigation-arrow", "ph-needle", "ph-newspaper-clipping", "ph-newspaper", "ph-notches", "ph-note-blank", "ph-notebook", "ph-note", "ph-notepad", "ph-note-pencil", "ph-notification", "ph-notion-logo", "ph-number-circle-eight", "ph-number-circle-five", "ph-number-circle-four", "ph-number-circle-nine", "ph-number-circle-one", "ph-number-circle-seven", "ph-number-circle-six", "ph-number-circle-three", "ph-number-circle-two", "ph-number-circle-zero", "ph-number-eight", "ph-number-five", "ph-number-four", "ph-number-nine", "ph-number-one", "ph-number-seven", "ph-number-six", "ph-number-square-eight", "ph-number-square-five", "ph-number-square-four", "ph-number-square-nine", "ph-number-square-one", "ph-number-square-seven", "ph-number-square-six", "ph-number-square-three", "ph-number-square-two", "ph-number-square-zero", "ph-number-three", "ph-number-two", "ph-number-zero", "ph-nut", "ph-ny-times-logo", "ph-octagon", "ph-office-chair", "ph-option", "ph-orange-slice", "ph-package", "ph-paint-brush-broad", "ph-paint-brush", "ph-paint-brush-household", "ph-paint-bucket", "ph-paint-roller", "ph-palette", "ph-pants", "ph-paperclip", "ph-paperclip-horizontal", "ph-paper-plane", "ph-paper-plane-right", "ph-paper-plane-tilt", "ph-parachute", "ph-paragraph", "ph-parallelogram", "ph-park", "ph-password", "ph-path", "ph-patreon-logo", "ph-pause-circle", "ph-pause", "ph-paw-print", "ph-paypal-logo", "ph-peace", "ph-pencil-circle", "ph-pencil", "ph-pencil-line", "ph-pencil-simple", "ph-pencil-simple-line", "ph-pencil-simple-slash", "ph-pencil-slash", "ph-pen", "ph-pen-nib", "ph-pen-nib-straight", "ph-pentagram", "ph-pepper", "ph-percent", "ph-person-arms-spread", "ph-person", "ph-person-simple-bike", "ph-person-simple", "ph-person-simple-run", "ph-person-simple-throw", "ph-person-simple-walk", "ph-perspective", "ph-phone-call", "ph-phone-disconnect", "ph-phone", "ph-phone-incoming", "ph-phone-outgoing", "ph-phone-plus", "ph-phone-slash", "ph-phone-x", "ph-phosphor-logo", "ph-piano-keys", "ph-picture-in-picture", "ph-pi", "ph-piggy-bank", "ph-pill", "ph-pinterest-logo", "ph-pinwheel", "ph-pizza", "ph-placeholder", "ph-planet", "ph-plant", "ph-play-circle", "ph-play", "ph-playlist", "ph-play-pause", "ph-plug-charging", "ph-plug", "ph-plugs-connected", "ph-plugs", "ph-plus-circle", "ph-plus", "ph-plus-minus", "ph-plus-square", "ph-poker-chip", "ph-police-car", "ph-polygon", "ph-popcorn", "ph-potted-plant", "ph-power", "ph-prescription", "ph-presentation-chart", "ph-presentation", "ph-printer", "ph-prohibit", "ph-prohibit-inset", "ph-projector-screen-chart", "ph-projector-screen", "ph-pulse", "ph-activity", "ph-push-pin", "ph-push-pin-simple", "ph-push-pin-simple-slash", "ph-push-pin-slash", "ph-puzzle-piece", "ph-qr-code", "ph-question", "ph-queue", "ph-quotes", "ph-radical", "ph-radioactive", "ph-radio-button", "ph-radio", "ph-rainbow-cloud", "ph-rainbow", "ph-read-cv-logo", "ph-receipt", "ph-receipt-x", "ph-record", "ph-rectangle", "ph-recycle", "ph-reddit-logo", "ph-repeat", "ph-repeat-once", "ph-rewind-circle", "ph-rewind", "ph-road-horizon", "ph-robot", "ph-rocket", "ph-rocket-launch", "ph-rows", "ph-rss", "ph-rss-simple", "ph-rug", "ph-ruler", "ph-scales", "ph-scan", "ph-scissors", "ph-scooter", "ph-screencast", "ph-scribble-loop", "ph-scroll", "ph-seal-check", "ph-circle-wavy-check", "ph-seal", "ph-circle-wavy", "ph-seal-question", "ph-circle-wavy-question", "ph-seal-warning", "ph-circle-wavy-warning", "ph-selection-all", "ph-selection-background", "ph-selection", "ph-selection-foreground", "ph-selection-inverse", "ph-selection-plus", "ph-selection-slash", "ph-shapes", "ph-share", "ph-share-fat", "ph-share-network", "ph-shield-check", "ph-shield-checkered", "ph-shield-chevron", "ph-shield", "ph-shield-plus", "ph-shield-slash", "ph-shield-star", "ph-shield-warning", "ph-shirt-folded", "ph-shooting-star", "ph-shopping-bag", "ph-shopping-bag-open", "ph-shopping-cart", "ph-shopping-cart-simple", "ph-shower", "ph-shrimp", "ph-shuffle-angular", "ph-shuffle", "ph-shuffle-simple", "ph-sidebar", "ph-sidebar-simple", "ph-sigma", "ph-signature", "ph-sign-in", "ph-sign-out", "ph-signpost", "ph-sim-card", "ph-siren", "ph-sketch-logo", "ph-skip-back-circle", "ph-skip-back", "ph-skip-forward-circle", "ph-skip-forward", "ph-skull", "ph-slack-logo", "ph-sliders", "ph-sliders-horizontal", "ph-slideshow", "ph-smiley-angry", "ph-smiley-blank", "ph-smiley", "ph-smiley-meh", "ph-smiley-nervous", "ph-smiley-sad", "ph-smiley-sticker", "ph-smiley-wink", "ph-smiley-x-eyes", "ph-snapchat-logo", "ph-sneaker", "ph-sneaker-move", "ph-snowflake", "ph-soccer-ball", "ph-sort-ascending", "ph-sort-descending", "ph-soundcloud-logo", "ph-spade", "ph-sparkle", "ph-speaker-hifi", "ph-speaker-high", "ph-speaker-low", "ph-speaker-none", "ph-speaker-simple-high", "ph-speaker-simple-low", "ph-speaker-simple-none", "ph-speaker-simple-slash", "ph-speaker-simple-x", "ph-speaker-slash", "ph-speaker-x", "ph-spinner", "ph-spinner-gap", "ph-spiral", "ph-split-horizontal", "ph-split-vertical", "ph-spotify-logo", "ph-square", "ph-square-half-bottom", "ph-square-half", "ph-square-logo", "ph-squares-four", "ph-square-split-horizontal", "ph-square-split-vertical", "ph-stack", "ph-stack-overflow-logo", "ph-stack-simple", "ph-stairs", "ph-stamp", "ph-star-and-crescent", "ph-star", "ph-star-four", "ph-star-half", "ph-star-of-david", "ph-steering-wheel", "ph-steps", "ph-stethoscope", "ph-sticker", "ph-stool", "ph-stop-circle", "ph-stop", "ph-storefront", "ph-strategy", "ph-stripe-logo", "ph-student", "ph-subtitles", "ph-subtract", "ph-subtract-square", "ph-suitcase", "ph-suitcase-rolling", "ph-suitcase-simple", "ph-sun-dim", "ph-sun", "ph-sunglasses", "ph-sun-horizon", "ph-swap", "ph-swatches", "ph-swimming-pool", "ph-sword", "ph-synagogue", "ph-syringe", "ph-table", "ph-tabs", "ph-tag-chevron", "ph-tag", "ph-tag-simple", "ph-target", "ph-taxi", "ph-telegram-logo", "ph-television", "ph-television-simple", "ph-tennis-ball", "ph-tent", "ph-terminal", "ph-terminal-window", "ph-test-tube", "ph-text-aa", "ph-text-align-center", "ph-text-align-justify", "ph-text-align-left", "ph-text-align-right", "ph-text-a-underline", "ph-text-b",
      "ph-text-bolder", "ph-textbox", "ph-text-columns", "ph-text-h", "ph-text-h-five", "ph-text-h-four", "ph-text-h-one", "ph-text-h-six", "ph-text-h-three", "ph-text-h-two", "ph-text-indent", "ph-text-italic", "ph-text-outdent", "ph-text-strikethrough", "ph-text-t", "ph-text-underline", "ph-thermometer-cold", "ph-thermometer", "ph-thermometer-hot", "ph-thermometer-simple", "ph-thumbs-down", "ph-thumbs-up", "ph-ticket", "ph-tidal-logo", "ph-tiktok-logo", "ph-timer", "ph-tipi", "ph-toggle-left", "ph-toggle-right", "ph-toilet", "ph-toilet-paper", "ph-toolbox", "ph-tooth", "ph-tote", "ph-tote-simple", "ph-trademark", "ph-trademark-registered", "ph-traffic-cone", "ph-traffic-signal", "ph-traffic-sign", "ph-train", "ph-train-regional", "ph-train-simple", "ph-tram", "ph-translate", "ph-trash", "ph-trash-simple", "ph-tray", "ph-tree", "ph-tree-evergreen", "ph-tree-palm", "ph-tree-structure", "ph-trend-down", "ph-trend-up", "ph-triangle", "ph-trophy", "ph-truck", "ph-t-shirt", "ph-twitch-logo", "ph-twitter-logo", "ph-umbrella", "ph-umbrella-simple", "ph-unite", "ph-unite-square", "ph-upload", "ph-upload-simple", "ph-usb", "ph-user-circle", "ph-user-circle-gear", "ph-user-circle-minus", "ph-user-circle-plus", "ph-user", "ph-user-focus", "ph-user-gear", "ph-user-list", "ph-user-minus", "ph-user-plus", "ph-user-rectangle", "ph-users", "ph-users-four", "ph-user-square", "ph-users-three", "ph-user-switch", "ph-van", "ph-vault", "ph-vibrate", "ph-video-camera", "ph-video-camera-slash", "ph-video", "ph-vignette", "ph-vinyl-record", "ph-virtual-reality", "ph-virus", "ph-voicemail", "ph-volleyball", "ph-wall", "ph-wallet", "ph-warehouse", "ph-warning-circle", "ph-warning-diamond", "ph-warning", "ph-warning-octagon", "ph-watch", "ph-waveform", "ph-wave-sawtooth", "ph-waves", "ph-wave-sine", "ph-wave-square", "ph-wave-triangle", "ph-webcam", "ph-webcam-slash", "ph-webhooks-logo", "ph-wechat-logo", "ph-whatsapp-logo", "ph-wheelchair", "ph-wheelchair-motion", "ph-wifi-high", "ph-wifi-low", "ph-wifi-medium", "ph-wifi-none-duotone",
      "ph-wifi-slash", "ph-wifi-x", "ph-wind", "ph-windows-logo", "ph-wine", "ph-wrench", "ph-x-circle", "ph-x", "ph-x-square", "ph-yin-yang", "ph-youtube-logo",
    ];

    for (var i = 0, l = icon_list.length; i < l; i++) {
      let icon_block = document.createElement('div');
      icon_block.setAttribute('class', 'i-block');
      icon_block.setAttribute('data-clipboard-text', 'ph-duotone ' + icon_list[i]);
      icon_block.setAttribute('data-bs-toggle', 'tooltip');
      icon_block.setAttribute('data-filter', icon_list[i]);
      icon_block.setAttribute('title', 'ph-duotone ' + icon_list[i]);

      let icon_main = document.createElement('i');
      icon_main.setAttribute('class', 'ph-duotone ' + icon_list[i]);
      icon_block.appendChild(icon_main);
      document.querySelector('#icon-wrapper').append(icon_block);
    }
    window.addEventListener('load', (event) => {
      var i_copy = new ClipboardJS('.i-block');
      i_copy.on('success', function (e) {
        var targetElement = e.trigger;
        let icon_badge = document.createElement('span');
        icon_badge.setAttribute('class', 'ic-badge badge bg-success');
        icon_badge.innerHTML = 'copied';
        targetElement.append(icon_badge);
        setTimeout(function () {
          targetElement.children[1].remove();
        }, 3000);
      });

      i_copy.on('error', function (e) {
        var targetElement = e.trigger;
        let icon_badge = document.createElement('span');
        icon_badge.setAttribute('class', 'ic-badge badge bg-danger');
        icon_badge.innerHTML = 'Error';
        targetElement.append(icon_badge);
        setTimeout(function () {
          targetElement.children[1].remove();
        }, 3000);
      });
      document.querySelector('#icon-search').addEventListener('keyup', function () {
        var g = document.querySelector('#icon-search').value.toLowerCase();
        var tc = document.querySelectorAll('.i-main .i-block');
        for (var i = 0; i < tc.length; i++) {
          var c = tc[i];
          var t = c.getAttribute('data-filter');
          if (t) {
            var s = t.toLowerCase();
          }
          if (s) {
            var n = s.indexOf(g);
            if (n !== -1) {
              c.style.display = 'inline-flex';
            } else {
              c.style.display = 'none';
            }
          }
        }
      });
    });
  </script>

  <!-- [Page Specific JS] end -->
@endsection