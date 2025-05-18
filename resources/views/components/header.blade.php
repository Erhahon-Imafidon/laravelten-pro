<div>
   <h1>
      This is the header component for welcome page
   </h1>
      <h3>Hello {{$name}}</h3>
    <h3>The fruits are</h3>
   <ul>
      @foreach($fruits as $fruit)
         <li>
            {{$fruit}}
         </li>
      @endforeach
   </ul>
</div>
