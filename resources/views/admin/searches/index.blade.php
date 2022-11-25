@extends('layouts.admin')
@section('content')
@if( Auth::user()->id == 1)
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.searches.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.search.title_singular') }}
            </a>
        </div>
    </div>
    @endif

<div class="card">
    <div class="card-header">
        {{ trans('cruds.search.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Search">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.search.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.search.fields.news_title') }}
                        </th>
                        <th>
                           Source
                        </th>
                        <th>
                            {{ trans('cruds.search.fields.source') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($searches as $key => $search)
                        <tr data-entry-id="{{ $search->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $search->id ?? '' }}
                            </td>
                            <td>
                                {{ $search->news_title ?? '' }}
                            </td>
                            <td>
                                {{ $search->source ?? '' }}
                            </td>
                            <td>
                                {{ $search->source->source ?? '' }}
                            </td>
                            <td>
                                @can('search_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.searches.show', $search->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('search_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.searches.edit', $search->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('search_delete')
                                    <form action="{{ route('admin.searches.destroy', $search->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('search_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.searches.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Search:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
