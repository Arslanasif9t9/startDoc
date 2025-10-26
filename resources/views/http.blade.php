<meta name='_token' content="{{ csrf_token() }}">
<h1>
    <form action="http/path"  method="POST">
        @csrf
        <input type="text" id="name" name="name" placeholder="emter your name">
    </form>
    <button type="button" onclick="submit()" >click</button>
</h1>

<script>
    function submit() {
        let name = document.getElementById('name').value
        let token = document.querySelector('meta[name="_token"]').getAttribute('content');
        // console.log (name)
        // let token = document.

        fetch(`http://127.0.0.1:8000/http/path`,{
            // method: 'GET',
            // header: {
            //     'Content-Type': 'application/json'
            // },
            // body: JSON.stringify(name),
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify({'name': name})
        })
        .then(respone => respone.json())
        .then(data => console.log(data))
        .catch(error => console.log(error))
        // location.href = '/http/path';
    }
</script>