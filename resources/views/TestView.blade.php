<html>
   <body>
      <h1>
       <?php echo $name ?>
       <br>
        <ul>
            @foreach ($testarray as $test)
                    <li> 
                        <a href = "/tasks/{{ $test->id}}">
                            {{ $test->body }} 
                        </a>
                    </li>
            @endforeach
        </ul>
    </h1>
   </body>
</html>
