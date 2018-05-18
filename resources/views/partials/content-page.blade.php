@php(the_content())

@php
  $images = get_field('image_gallery');
  $image_count = 1;
  $image_total = count($images);
@endphp

@if ( $images )
  <div class="card-columns mt-5">
    @foreach( $images as $image )
      <div class="card d-inline-block text-center w-100">
        <a data-toggle="modal" data-target="#imageModal{{ $image_count }}">
          <img class="card-img-top" src="{{ $image['sizes']['medium'] }}" alt="{{ $image['alt'] }}"/>
        </a>
      </div>
      @php($image_count++)
    @endforeach
  </div>

  @php
    $image_count = 1;
    $image_prev = $image_total;
    $image_next = 2;
  @endphp

  @foreach( $images as $image )
    <div class="modal fade" id="imageModal{{ $image_count }}" tabindex="-1" role="dialog" aria-labelledby="{{ $image['alt'] }}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <img class="card-img-top" src="{{ $image['url']}}" alt="{{ $image['alt'] }}"/>
          </div>
          <div class="modal-footer">
            <a class="float-left mr-auto" data-dismiss="modal" data-toggle="modal" data-target="#imageModal{{ $image_prev }}">
              <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>

            <a class="float-right ml-auto" data-dismiss="modal" data-toggle="modal" data-target="#imageModal{{ $image_next }}">
              <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    @php( $image_count++ )

    @if ( $image_prev == $image_total )
      @php( $image_prev = 1 )
    @else
      @php( $image_prev++ )
    @endif

    @if ( $image_next == $image_total )
      @php( $image_prev = 1 )
    @else
      @php( $image_next++ )
    @endif
  @endforeach
@endif


{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
