<x-backend-layout>
    <h1>
        <x-slot name="title">Dashboard Overzicht</x-slot>
    </h1>
    <p>Hier komen de belangrijkste statistieken</p>
   <x-ui.button class="bg-blue-600 hover:bg-blue-700 focus:ring-blue-500">Standaard knop</x-ui.button>
    <x-ui.button class="bg-red-600 hover:bg-red-700 focus:ring-red-500">Verwijder</x-ui.button>
    <x-ui.buttonvariant variant="primary" size="small">Standaard knop</x-ui.buttonvariant>
    <x-ui.buttonvariant variant="secondary" size="medium">Annuleren</x-ui.buttonvariant>
    <x-ui.buttonvariant variant="danger" size="large">Verwijderen</x-ui.buttonvariant>
</x-backend-layout>
