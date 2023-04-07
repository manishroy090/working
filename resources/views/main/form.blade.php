<form id="product">
    <div class="flex flex-row space-x-3">
        <div class="flex flex-col">
            <x-lable for="title">{{ __('Title') }}</x-label>
            <x-input-field type="text" placeholder="Title" id="title" name="title"></x-input-field>
        </div>
    
        <div class="flex flex-col">
    <x-lable for="price">{{ __('price')}}</x-lable>
    <x-input-field type="text" placeholder="Price" id="price" name="price"></x-input-field>
        </div>
        <x-primary-button type="submit" id="add">{{__('Add')}}</x-primary-button>
    
    </div>
</form>


