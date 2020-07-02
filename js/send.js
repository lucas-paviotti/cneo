$("#f_contacto").validate
  ({
    rules: {
      nombre: {required: true},
      apellido: {required: true},
      telefono: {required: true},
      mail: {required: true, email:true}
      },

      messages: {
      nombre: {required: 'El campo es requerido'},
      apellido: {required: 'El campo es requerido'},
      telefono: {required: 'El campo es requerido'},
      mail: {required: 'El campo es requerido', email:'El formato de email es incorrecto'}
      },
    submitHandler: function(form) {
      $.ajax({
          type: 'POST',
          url: 'form.php',
          data: $("#f_contacto").serialize(), 
          success: function(data)             
          {
          $("#modalSendOk").modal('show');
          $("#f_contacto").each(function(){this.reset();});
          },
          error: function(data){
          $("#modalSendError").modal('show');     
          }
      });
      return false;
    }
});