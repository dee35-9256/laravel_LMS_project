<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Book</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('books.store') }}">
          @csrf
          <div class="form-group">    
              <label for="book_name">Book Name:</label>
              <input type="text" class="form-control" name="book_name"/>
          </div>

          <div class="form-group">
          <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="published">Published</option>
                <option value="draft">Draft</option>
            </select>
          </div>

            <button type="submit" class="btn btn-primary-outline">Add contact</button>
      </form>
  </div>
</div>
</div>