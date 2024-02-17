<section>
    <div class="py-16 lg:py-24">
        <x-container>
            <div class="max-w-3xl">
                <h1 class="text-5xl font-extrabold tracking-tight text-zinc-950 lg:text-6xl">Tarifas de Holi</h1>
                <p class="mt-6 text-lg text-zinc-950/80 lg:text-xl">
                    Dos planes sencillos, cada uno con una
                    <strong class="font-bold text-zinc-950">prueba gratuita de 30 días</strong>
                    . No se requiere tarjeta de crédito.
                </p>
            </div>
        </x-container>
    </div>
    <div class="pb-16 lg:pb-24">
        <x-container>
            <div class="grid grid-cols-1 gap-y-10 lg:grid-cols-5 xl:gap-x-8">
                <x-holi.pricing.plan
                    name="Holi"
                    price="$499"
                    description="Ideal para freelancers, startups o equipos pequeños. "
                    href="https://holi.radiocubito.com/register"
                    :features="
                        [
                            'Enlaces ilimitados',
                            'Retención de analíticas por 30 días',
                            '3 dominios personalizados',
                            'Incluye un año de servicio',
                            '$129 MXN/año por los servicios posteriores',
                        ]
                    "
                />
                <x-holi.pricing.plan
                    featured
                    name="Holi Pro"
                    price="$799"
                    description="Perfecto para negocios en crecimiento, grupos más grandes y empresas que quieren lo mejor."
                    href="https://holi.radiocubito.com/register"
                    :features="
                        [
                            'Enlaces ilimitados',
                            'Retención de analíticas por 1 año',
                            '10 dominios personalizados',
                            'Incluye un año de servicio',
                            '$199 MXN/año por los servicios posteriores',
                        ]
                    "
                />
            </div>
        </x-container>
    </div>
</section>
