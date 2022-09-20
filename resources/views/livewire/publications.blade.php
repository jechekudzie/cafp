<div>
    {{-- Do your work, then step back. --}}
    <div class="w-full flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.debounce.300ms="search" type="text"
                   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                   placeholder="Search by title ...">
        </div>

        <div class="w-1/6 relative mx-1">
            <select wire:model="publication_category"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                <option value="">Filter By Category</option>
                @foreach($publication_categories as $publication_category)
                    <option value="{{$publication_category->id}}">{{$publication_category->name}}</option>
                @endforeach

            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="perPage"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    @foreach($publications as $publication)
        <div style="margin-top:-80px;" class="blog-box-deatil">
            <h3><a style="color:#FCC100;" href="javascript:void(0)
">{{$publication->publication_category->name}}</a></h3>
            <h4><a style="color: #117143;" href="{{url($publication->file)}}" target="_blank">{{$publication->title}}</a></h4>
            <div class="blog-tags">
                <a href="javascript:void(0)"><span>Authors</span> {{$publication->authors}},</a>
                <h4><a style="color:grey;" href="javascript:void(0)">{{$publication->sub_title}}</a></h4>
            </div>
            <p>{!! $publication->description !!}</p>
        </div>
    @endforeach

    <div class="livewire-pagination">{!! $publications->links() !!}</div>

    <div>
        Showing {!! $publications->firstItem() !!} of {!! $publications->lastItem() !!} out
        of {!! $publications->total() !!}

    </div>
</div>
