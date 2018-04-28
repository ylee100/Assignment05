$(document).ready(function(){

  fetch_data();
    function fetch_data()
    {
        $.ajax({
            url:"db/select.php",
            method:"POST",
            success:function(data){
				$('#live_data').html(data);
            }
        });
    }

    $(document).on('click', '#btn_add', function(){
        var name = $('#name').text();
        var favorite = $('#favorite').text();
        if(name == '')
        {
            alert("Enter Name");
            return false;
        }
        if(favorite == '')
        {
            alert("Favorite");
            return false;
        }
        $.ajax({
            url:"db/insert.php",
            method:"POST",
            data:{name:name, favorite:favorite},
            dataType:"text",
            success:function(data)
            {
                alert(data);
                fetch_data();
            }
        })
    });

	function edit_data(id, text, column_name)
    {
        $.ajax({
            url:"db/edit.php",
            method:"POST",
            data:{id:id, text:text, column_name:column_name},
            dataType:"text",
            success:function(data){
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }
        });
    }
    $(document).on('blur', '.name', function(){
        var id = $(this).data("id1");
        var name = $(this).text();
        edit_data(id, name, "name");
    });
    $(document).on('blur', '.favorite', function(){
        var id = $(this).data("id2");
        var favorite = $(this).text();
        edit_data(id,favorite, "favorite");
    });

    $(document).on('click', '.btn_delete', function(){
        var id=$(this).data("id3");
        if(confirm("Are you sure you want to delete this?"))
        {
            $.ajax({
                url:"db/delete.php",
                method:"POST",
                data:{id:id},
                dataType:"text",
                success:function(data){
                    alert(data);
                    fetch_data();
                }
            });
        }
    });
});
