import Alpine from "alpinejs";
import trap from '@alpinejs/trap';
import persist from '@alpinejs/persist';
import intersect from '@alpinejs/intersect';
(function (window, undefined) {
  'use strict';

  /* AlpineJS Init */
  window.Alpine = Alpine
  Alpine.start();

  Alpine.plugin(trap)
  Alpine.plugin(persist)
  Alpine.plugin(intersect)


  // Jika ada script yang akan di load silahkan simpan disini
  /*  $(document).on('click', 'a[href="#"]', function (e) {
    e.preventDefault();
  });*/

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */
})(window);

// Tempatkan semua script disini atau diluar function init diatas contoh bila ada event yang digunakan
/*window.addEventListener('refreshTable', function () {
  this.emit();
});*/

