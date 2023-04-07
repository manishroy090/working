
<table class="border-collapse border border-slate-500 ...">
    <thead>
      <tr>
        <th class="border border-slate-600 ...">Title</th>
        <th class="border border-slate-600 ...">Price</th>
        <th class="border border-slate-600 ...">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            
        <tr>
            <td class="border border-slate-700 ...">{{$item->title}}</td>
            <td class="border border-slate-700 ...">{{$item->price}}</td>
            <td class="border border-slate-700 ..."> <i class="bi bi-pencil"></i>
                <i class="bi bi-trash3"></i></td>
                <
            </tr>
            @endforeach
     
    </tbody>
  </tabl