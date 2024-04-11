<x-admin.wrapper>
    <x-slot name="title">
            {{ __('housing') }}
    </x-slot>

    <div class="d-print-none with-border">
        <x-admin.breadcrumb href="{{route('admin.housing.index')}}" title="{{ __('View housing') }}">{{ __('<< Back to all housing') }}</x-admin.breadcrumb> 
    </div>
    <div class="w-full py-2">
        <div class="min-w-full border-base-200 shadow">
            <table class="table-fixed w-full text-sm">
                <tbody>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('plaats') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$housing->plaats}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('adres') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$housing->adres}}</td>
                    </tr>
                                @endforelse
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Created') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$housing->created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin.wrapper>
