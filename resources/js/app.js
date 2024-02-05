import './bootstrap';
import Swal from 'sweetalert'

window.deleteConfirm = function (e) {
  e.preventDefault();
  const form = e.target.form;
  Swal({
    title: "Are you sure you want to delete?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      form.submit();
    }
  });
};