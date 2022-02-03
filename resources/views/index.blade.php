<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Books</h1>   
    <a href="books/create "> create</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Id</td>
          <td>Book Name</td>
          <td>Author Name</td>
          <td>category Name</td>
          <td>status</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($book as $books)
        <tr>
            <td>{{$books->id}}</td>
            <td>{{$books->book_title}}</td>
            <td>{{$books->author->author_name}}</td>
            <td>{{$books->category->category}}</td>
            <td>{{$books->status}}</td>
        
            <td>
                <a href="" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('books.destroy', $books->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
