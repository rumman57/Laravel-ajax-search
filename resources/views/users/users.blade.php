 <ul>
   	 @foreach($users as $user)

        <li style="padding: 2px;font-weight: bold;">{{ $user->name }}</li>

   	 @endforeach
   </ul>