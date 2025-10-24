<div>
    <form action="submit" method="POST">
        {{-- @csrf --}}
        submit: 
        <input type="text" name="name" placeholder="enter your name">
        <input type="password" name='password' placeholder="enter your password">
        <input type="submit">
    </form>

    <form action="abcd/create" method="GET">
        @csrf
        create: 
        <input type="text" name="name" placeholder="enter your name">
        <input type="password" name='password' placeholder="enter your password">
        <input type="submit">
    </form>
    
    <form action="abcd" method="POST">
        @csrf
        store: 
        <input type="text" name="name" placeholder="enter your name">
        <input type="password" name='password' placeholder="enter your password">
        <input type="submit">
    </form>

    <a href="abcd/Mobile">Mobile</a>

    <form action="abcd/mobile/edit" method="GET">
        @csrf
        edit: 
        <input type="text" name="name" placeholder="enter your name">
        <input type="password" name='password' placeholder="enter your password">
        <input type="submit">
    </form>

    <form action="abcd/mobile" method="POST">
        @csrf
        @method('PUT')
        Update:         
        <input type="text" name="name" placeholder="enter your name">
        <input type="password" name='password' placeholder="enter your password">
        <input type="submit">
    </form>

    <form action="abcd/mobile" method="POST">
        @csrf
        @method('DELETE')
        Delete: 
        <input type="text" name="name" placeholder="enter your name">
        <input type="password" name='password' placeholder="enter your password">
        <input type="submit">
    </form>

    {{-- <a href="abcd/oisdh/ugjyg/vhyf">missing link</a> --}}
</div>
