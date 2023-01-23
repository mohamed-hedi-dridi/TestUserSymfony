function handleForm(){
    id = $("#id").val();
    name = $("#fullname").val();
    email = $("#email").val();
    password = $("#password").val(); 
    var user =
        {
          fullname : name,
          password : password,
          email : email
        };
    if(!id){
      addUser(user); 
    }else{
      updateUser(user , id); 
    }
  }

  function deleteFunction(id){
    $('#modal-danger').data('id', id).modal('show'); 

    $("body").on('click', '#btnDelteYes', function() {
    var id = $('#modal-danger').data('id');
    $('#modal-danger').modal('hide');
    $.ajax({
          url:"/api/user/delete/"+id,
          type:"DELETE",
          success: function(data){
            alert(data.message); 
            $("#tr"+id).remove();
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error("Response json has no message");
              }
              else{
                alert(json.message);
              }
            }
          catch(ex){
            alert("unexpected error (code:" + response.status +")");
          }
        }

      });
   
  });
  }

  function updateFormFunction(id){
    $.ajax({
          url:"/api/getuser/"+id,
          type:"GET",
          success: function(data){
            $('#id').val(data.id); 
            $('#email').val(data.email); 
            $('#fullname').val(data.fullname); 
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error("Response json has no message");
              }
              else{
                alert(json.message);
              }
            }catch(ex){
            alert("unexpected error (code:" + response.status +")");
            }
          }

      });

  }

  function updateUser(user , id){
    $.ajax({
          url:"user/edit/"+id,
          type:"PUT",
          data:JSON.stringify(user),
          contentType: 'application/json',
          success: function(data){
            console.log(data); 
            $('#tr'+id).empty(); 
            $("#tr"+id).append("<td>"+id+"</td><td>"+data.user.fullname+"</td><td>"+data.user.email+"</td><td><button class='btn' onclick='updateFormFunction("+id+")'><i class='fas fa-edit'></i>Edit</button><button class='btn bg-danger' onclick='deleteFunction("+id+")'><i class='fas fa-trash'></i>Supprimer</button></td></tr>");
            alert(data.message);
            $('#id').val(''); 
            $('#email').val(''); 
            $('#fullname').val('');
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error("Response json has no message");
              }
              else{
                alert(json.message);
              }
            }
          catch(ex){
            alert("unexpected error (code:" + response.status +")");
          }
        }

      });
  }

  function addUser(user){
    console.log(user);
    $.ajax({
          url:"/api/adduser",
          type:"POST",
          data:JSON.stringify(user),
          contentType: 'application/json',
          success: function(data){
            id = data.id;
            $("#users_list").append("<tr id='tr"+id+"'><td>"+id+"</td><td>"+user.fullname+"</td><td>"+user.email+"</td><td><button class='btn' onclick='updateFormFunction("+id+")'><i class='fas fa-edit'></i>Edit</button><button class='btn bg-danger' onclick='deleteFunction("+id+")'><i class='fas fa-trash'></i>Supprimer</button></td></tr>");
            document.getElementById("id").value = null;
            document.getElementById("email").value = null;
            document.getElementById("fullname").value = null;
            alert(data.message);
          },
          error:  function error(response){
            try{
              var json = JSON.parse(response.responseText);
              if(typeof json.message === 'undefined'){
                throw new Error("Response json has no message");
              }
              else{
                alert(json.message);
              }
            }
          catch(ex){
            alert("unexpected error (code:" + response.status +")");
          }
        }
      });

  }
