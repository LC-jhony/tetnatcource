<x-app-layout>
    <x-bree.container>
        <div class="flex justify-end">
            <x-bree.button color="teal" size="base" value="Register" icon="academic-cap" iconPosition="left"
                href="{{ route('dashboard') }}" />
        </div>
        <x-bree.button type="submit" color="red" size="extrasmall" value="Register" icon="academic-cap"
            iconPosition="left" />
    </x-bree.container>
</x-app-layout>
