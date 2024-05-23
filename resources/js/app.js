import 'preline';
import './bootstrap';
import '../css/app.css';
import 'boxicons';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener("keydown", function (evt) {
    if (evt.code === "Backslash") {
      const overlay = HSOverlay.getInstance('[data-hs-overlay="#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"]', true);
      const combobox = HSComboBox.getInstance('#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger [data-hs-combo-box]', true);

      if (overlay.element && overlay.element.overlay.classList.contains('open')) return false;

      overlay.element.open();
      combobox.element.setCurrent();
    }
});
