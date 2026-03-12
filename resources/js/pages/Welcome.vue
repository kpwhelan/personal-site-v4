<script setup lang="ts">
import { Form, Head, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import {
    faCode,
    faGlobe,
    faLayerGroup,
    faPlug,
    faScrewdriverWrench,
    faUserGear,
} from '@fortawesome/free-solid-svg-icons';
import InputError from '@/components/InputError.vue';
import heroPhoto from '@/assets/me.png';

const siteUrl = 'https://kevinwhelandev.com';
const siteName = 'Kevin Whelan';
const pageTitle =
    'Kevin Whelan | Senior Full Stack Engineer for Custom Software, APIs, and Business Websites';
const pageDescription =
    'Senior full stack engineer building custom software, APIs, internal tools, and modern business websites with Laravel, Vue, React, TypeScript, and AWS.';
const contactEmail = 'kevin@kevinwhelandev.com';
const pageImage = `${siteUrl}/images/og-home.jpg`;

const nav = [
    { label: 'What I Do', href: '#services' },
    { label: 'Problems I Solve', href: '#problems' },
    { label: 'About', href: '#about' },
    { label: 'Contact', href: '#contact' },
];

const techGroups = [
    {
        title: 'Backend',
        items: [
            'Laravel',
            'PHP',
            'Node / Nest',
            'MySQL',
            'PostgreSQL',
            'REST APIs',
        ],
    },
    {
        title: 'Frontend',
        items: [
            'Vue 3',
            'React',
            'TypeScript',
            'Tailwind CSS',
            'Inertia',
            'SPA / SSR',
        ],
    },
    {
        title: 'Infrastructure',
        items: [
            'AWS',
            'Docker',
            'CI / CD',
            'Linux',
            'Deployment',
            'Integrations',
        ],
    },
];

const helpCards = [
    {
        title: 'Custom Software',
        text: 'Web applications, dashboards, internal tools, and practical systems built around how your business actually works.',
    },
    {
        title: 'APIs & Integrations',
        text: 'Backend services, third-party integrations, and reliable APIs that connect systems cleanly.',
    },
    {
        title: 'Business Websites',
        text: 'Modern websites for businesses that need a stronger online presence, more trust, and more inbound leads.',
    },
];

const problemItems = [
    {
        icon: faScrewdriverWrench,
        title: 'Custom apps without agency overhead',
        text: 'You need a custom app or internal tool, but not the overhead of a large agency.',
    },
    {
        icon: faCode,
        title: 'Improve an existing Laravel or Vue app',
        text: 'You already have a Laravel or Vue app and need help improving, extending, or stabilizing it.',
    },
    {
        icon: faPlug,
        title: 'Connect systems and reduce manual work',
        text: 'Your team needs APIs or integrations to connect systems and reduce manual work.',
    },
    {
        icon: faGlobe,
        title: 'Modernize an outdated website',
        text: 'Your website feels outdated, slow, or unclear and is not doing a good job representing your business.',
    },
    {
        icon: faUserGear,
        title: 'Work directly with someone reliable',
        text: 'You need someone who can work independently, communicate clearly, and ship thoughtful work without a lot of noise.',
    },
    {
        icon: faLayerGroup,
        title: 'Keep the code practical and maintainable',
        text: 'You want maintainable code and practical execution, not over-engineering.',
    },
];

const processSteps = [
    {
        title: 'Understand the problem',
        text: 'Start with the real business need, not just a list of features.',
    },
    {
        title: 'Define clear scope',
        text: 'Break the work into something realistic, prioritized, and easy to execute.',
    },
    {
        title: 'Build with steady updates',
        text: 'Move quickly, communicate clearly, and keep progress visible.',
    },
    {
        title: 'Deliver maintainable work',
        text: 'Ship something solid that is easy to understand, extend, and support.',
    },
];

const aboutStats = [
    { label: 'Focus', value: 'Software that solves real problems' },
    { label: 'Best fit', value: 'Apps, APIs, websites, improvements' },
    { label: 'Style', value: 'Practical, thoughtful, low-friction' },
];

const heroStyle = computed(() => ({
    background: 'radial-gradient(circle at 20% 20%, #14233A 0%, #0B1220 45%)',
}));

const gridStyle = computed(() => ({
    backgroundImage:
        'linear-gradient(to right, rgba(255,255,255,.14) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,.14) 1px, transparent 1px)',
    backgroundSize: '64px 64px',
}));

const primary = '#3B82F6';
const primaryHover = '#2563EB';

const hoveringPrimary = ref(false);
const mobileMenuOpen = ref(false);

const page = usePage();

const flashSuccess = computed(
    () => page.props.flash?.success as string | undefined,
);

const flashError = computed(
    () => page.props.flash?.error as string | undefined,
);

const structuredData = computed(() => ({
    '@context': 'https://schema.org',
    '@graph': [
        {
            '@type': 'Person',
            name: 'Kevin Whelan',
            url: siteUrl,
            image: `${siteUrl}/images/me.png`,
            jobTitle: 'Senior Full Stack Engineer',
            description: pageDescription,
            email: `mailto:${contactEmail}`,
            knowsAbout: [
                'Laravel',
                'Vue',
                'React',
                'TypeScript',
                'AWS',
                'API Development',
                'Business Websites',
                'Custom Software Development',
            ],
        },
        {
            '@type': 'WebSite',
            name: siteName,
            url: siteUrl,
            description: pageDescription,
        },
        {
            '@type': 'WebPage',
            name: pageTitle,
            url: siteUrl,
            description: pageDescription,
            isPartOf: {
                '@type': 'WebSite',
                name: siteName,
                url: siteUrl,
            },
            about: {
                '@type': 'Person',
                name: 'Kevin Whelan',
            },
        },
        {
            '@type': 'ProfessionalService',
            name: 'Kevin Whelan',
            url: siteUrl,
            description:
                'Custom software development, API development, and modern business website services.',
            areaServed: 'United States',
            serviceType: [
                'Custom Software Development',
                'API Development',
                'Business Website Development',
            ],
            provider: {
                '@type': 'Person',
                name: 'Kevin Whelan',
            },
            email: contactEmail,
        },
    ],
}));

const structuredDataJson = computed(() => JSON.stringify(structuredData.value));
</script>

<template>
    <Head>
        <title>{{ pageTitle }}</title>

        <meta name="description" :content="pageDescription" />
        <meta name="robots" content="index,follow,max-image-preview:large" />
        <meta name="author" content="Kevin Whelan" />
        <meta
            name="keywords"
            content="Kevin Whelan, Laravel developer, full stack engineer, Vue developer, React developer, TypeScript developer, API development, custom software developer, business website developer"
        />
        <link rel="canonical" :href="siteUrl" />

        <meta property="og:type" content="website" />
        <meta property="og:site_name" :content="siteName" />
        <meta property="og:title" :content="pageTitle" />
        <meta property="og:description" :content="pageDescription" />
        <meta property="og:url" :content="siteUrl" />
        <meta property="og:image" :content="pageImage" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" :content="pageTitle" />
        <meta name="twitter:description" :content="pageDescription" />
        <meta name="twitter:image" :content="pageImage" />

        <meta name="theme-color" content="#08111d" />

        <component :is="'script'" type="application/ld+json">
            {{ structuredDataJson }}
        </component>
    </Head>

    <div class="bg-[#08111d] text-white">
        <a
            href="#main-content"
            class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:rounded-md focus:bg-white focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-[#08111d] focus:outline-none"
        >
            Skip to main content
        </a>

        <header class="relative overflow-hidden" :style="heroStyle">
            <div
                class="pointer-events-none absolute inset-0 opacity-[0.05]"
                :style="gridStyle"
                aria-hidden="true"
            />

            <div
                class="pointer-events-none absolute -top-24 -left-24 h-80 w-80 rounded-full opacity-30 blur-3xl"
                :style="{ background: primary }"
                aria-hidden="true"
            />

            <div class="relative mx-auto max-w-7xl px-6 py-6 md:py-8">
                <div class="flex items-center justify-between">
                    <a
                        href="/"
                        class="rounded font-semibold tracking-tight text-white focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none"
                        aria-label="Kevin Whelan home"
                    >
                        Kevin Whelan
                    </a>

                    <nav
                        aria-label="Primary"
                        class="hidden items-center gap-7 text-sm text-white/85 md:flex"
                    >
                        <a
                            v-for="item in nav"
                            :key="item.href"
                            :href="item.href"
                            class="rounded transition hover:text-white focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none"
                        >
                            {{ item.label }}
                        </a>

                        <a
                            href="#contact"
                            class="rounded-full px-4 py-2 text-sm font-medium text-white transition hover:bg-white/20 focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none"
                            style="background: #1f2937"
                        >
                            Get in touch
                        </a>
                    </nav>

                    <button
                        type="button"
                        class="inline-flex items-center justify-center rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-white focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none md:hidden"
                        :aria-expanded="mobileMenuOpen ? 'true' : 'false'"
                        aria-controls="mobile-navigation"
                        aria-label="Toggle navigation menu"
                        @click="mobileMenuOpen = !mobileMenuOpen"
                    >
                        <span>{{ mobileMenuOpen ? 'Close' : 'Menu' }}</span>
                    </button>
                </div>

                <nav
                    v-if="mobileMenuOpen"
                    id="mobile-navigation"
                    aria-label="Mobile"
                    class="mt-4 rounded-2xl border border-white/10 bg-white/[0.06] p-3 backdrop-blur md:hidden"
                >
                    <ul class="space-y-1">
                        <li v-for="item in nav" :key="item.href">
                            <a
                                :href="item.href"
                                class="block rounded-lg px-3 py-2 text-sm text-white/90 transition hover:bg-white/10 focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:outline-none"
                                @click="mobileMenuOpen = false"
                            >
                                {{ item.label }}
                            </a>
                        </li>
                        <li>
                            <a
                                href="#contact"
                                class="mt-2 block rounded-lg px-3 py-2 text-sm font-medium text-white transition hover:bg-white/10 focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:outline-none"
                                @click="mobileMenuOpen = false"
                            >
                                Get in touch
                            </a>
                        </li>
                    </ul>
                </nav>

                <section
                    class="mt-12 grid items-center gap-10 md:grid-cols-12 lg:gap-14"
                    aria-labelledby="home-hero-title"
                >
                    <div class="order-2 md:order-1 md:col-span-7">
                        <div class="max-w-3xl">
                            <p
                                class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.08] px-4 py-2 text-sm font-medium text-white/95 shadow-sm backdrop-blur"
                            >
                                <span
                                    class="h-2.5 w-2.5 rounded-full"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                />
                                Senior Full Stack Engineer • Laravel • Vue •
                                React • APIs • AWS
                            </p>

                            <h1
                                id="home-hero-title"
                                class="mt-6 max-w-5xl text-5xl font-semibold tracking-tight text-white sm:text-6xl lg:text-[4.2rem] lg:leading-[0.98]"
                            >
                                Custom software, APIs, and modern websites
                                <span class="block text-white/72">
                                    Built by a senior engineer who works
                                    directly with you
                                </span>
                            </h1>

                            <p
                                class="mt-7 max-w-3xl text-xl leading-8 text-white/88 sm:text-[1.35rem]"
                            >
                                I help startups, small teams, and local
                                businesses build custom software, APIs, internal
                                tools, and modern websites that are clear,
                                maintainable, and grounded in real business
                                needs.
                            </p>

                            <div class="mt-9 flex flex-wrap gap-3">
                                <a
                                    href="#contact"
                                    class="rounded-xl px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-black/20 transition focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none"
                                    :style="{
                                        background: hoveringPrimary
                                            ? primaryHover
                                            : primary,
                                    }"
                                    @mouseenter="hoveringPrimary = true"
                                    @mouseleave="hoveringPrimary = false"
                                >
                                    Start a conversation
                                </a>

                                <a
                                    href="#services"
                                    class="rounded-xl border border-white/15 bg-white/5 px-6 py-3.5 text-sm font-semibold text-white/95 transition hover:bg-white/10 focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none"
                                >
                                    View services
                                </a>
                            </div>

                            <div class="mt-10 grid gap-4 sm:grid-cols-3">
                                <div
                                    class="rounded-2xl border border-white/10 bg-white/[0.05] p-4 backdrop-blur"
                                >
                                    <p class="text-sm text-white/65">
                                        Best fit
                                    </p>
                                    <p
                                        class="mt-2 text-sm leading-relaxed font-medium text-white/92"
                                    >
                                        Custom apps, internal tools, APIs, and
                                        business websites
                                    </p>
                                </div>

                                <div
                                    class="rounded-2xl border border-white/10 bg-white/[0.05] p-4 backdrop-blur"
                                >
                                    <p class="text-sm text-white/65">
                                        Working style
                                    </p>
                                    <p
                                        class="mt-2 text-sm leading-relaxed font-medium text-white/92"
                                    >
                                        Clear communication, thoughtful
                                        execution, low friction
                                    </p>
                                </div>

                                <div
                                    class="rounded-2xl border border-white/10 bg-white/[0.05] p-4 backdrop-blur"
                                >
                                    <p class="text-sm text-white/65">
                                        Response time
                                    </p>
                                    <p
                                        class="mt-2 text-sm leading-relaxed font-medium text-white/92"
                                    >
                                        Within 1 business day
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 md:order-2 md:col-span-5">
                        <div
                            class="relative mx-auto max-w-lg md:mr-0 md:ml-auto"
                        >
                            <div
                                class="pointer-events-none absolute -inset-6 rounded-[2.5rem] opacity-40 blur-2xl"
                                :style="{
                                    background:
                                        'radial-gradient(circle at 30% 30%, rgba(59,130,246,.35), transparent 70%)',
                                }"
                                aria-hidden="true"
                            />

                            <div
                                class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.04] shadow-2xl shadow-black/20"
                            >
                                <div class="aspect-[2/3] w-full">
                                    <img
                                        :src="heroPhoto"
                                        alt="Kevin Whelan, senior full stack engineer"
                                        class="h-full w-full object-cover object-center brightness-[1.08] contrast-[1.04] saturate-[1.02]"
                                        loading="eager"
                                        fetchpriority="high"
                                        decoding="async"
                                    />
                                </div>

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/18 via-black/4 to-transparent"
                                    aria-hidden="true"
                                />

                                <div
                                    class="pointer-events-none absolute inset-0 rounded-[2rem] ring-1 ring-white/10"
                                    aria-hidden="true"
                                />

                                <div
                                    class="absolute inset-x-4 bottom-4 sm:inset-x-5 sm:bottom-5"
                                >
                                    <div
                                        class="rounded-2xl border border-white/15 bg-white/10 p-4 shadow-lg shadow-black/20 backdrop-blur-md"
                                    >
                                        <p
                                            class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3 py-1.5 text-sm text-white/95"
                                        >
                                            <span
                                                class="h-2 w-2 rounded-full"
                                                :style="{ background: primary }"
                                                aria-hidden="true"
                                            />
                                            Available for contract work
                                        </p>

                                        <p
                                            class="mt-3 text-base leading-snug font-semibold text-white sm:text-lg"
                                        >
                                            Thoughtful builds for products,
                                            platforms, and growing businesses
                                        </p>

                                        <p class="mt-1 text-sm text-white/85">
                                            Startups • small teams • local
                                            businesses
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>

        <main id="main-content">
            <section
                id="services"
                aria-labelledby="services-title"
                class="border-t border-white/5 bg-[#0A1320]"
            >
                <div class="mx-auto max-w-6xl px-6 py-16">
                    <div
                        class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between"
                    >
                        <div class="max-w-3xl">
                            <p
                                class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                            >
                                <span
                                    class="h-2 w-2 rounded-full"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                />
                                What I do
                            </p>

                            <h2
                                id="services-title"
                                class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                            >
                                Practical software and website work for real
                                business needs
                            </h2>

                            <p
                                class="mt-4 text-lg leading-relaxed text-white/80"
                            >
                                I help clients build, improve, and modernize the
                                systems they rely on — with a focus on clear
                                execution, maintainable code, and useful
                                outcomes.
                            </p>
                        </div>

                        <div class="text-sm text-white/70 sm:text-right">
                            <p>Typical projects</p>
                            <p class="mt-1 font-medium text-white/90">
                                Build, improve, or modernize
                            </p>
                        </div>
                    </div>

                    <ul class="mt-10 grid gap-4 md:grid-cols-3" role="list">
                        <li v-for="card in helpCards" :key="card.title">
                            <article
                                class="h-full rounded-2xl border border-white/10 bg-white/[0.04] p-6 backdrop-blur transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.07] hover:shadow-xl hover:shadow-black/20"
                            >
                                <h3 class="text-lg font-semibold text-white">
                                    {{ card.title }}
                                </h3>
                                <p class="mt-3 text-sm leading-7 text-white/80">
                                    {{ card.text }}
                                </p>
                            </article>
                        </li>
                    </ul>
                </div>
            </section>

            <section
                id="problems"
                aria-labelledby="problems-title"
                class="border-t border-white/5 bg-[#09111c]"
            >
                <div class="mx-auto max-w-6xl px-6 py-20">
                    <div class="max-w-3xl">
                        <p
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                        >
                            <span
                                class="h-2 w-2 rounded-full"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            ></span>
                            Problem-focused work
                        </p>

                        <h2
                            id="problems-title"
                            class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                        >
                            Problems I solve
                        </h2>

                        <p class="mt-4 text-lg leading-relaxed text-white/80">
                            Clients usually come to me because something needs
                            to be built, fixed, improved, or made easier to
                            maintain. These are the kinds of problems I commonly
                            help with.
                        </p>
                    </div>

                    <div class="mt-10 grid gap-5 md:grid-cols-2">
                        <div class="flex flex-col gap-5 md:pt-0">
                            <article
                                v-for="item in problemItems.slice(0, 3)"
                                :key="item.title"
                                class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.03] p-6 backdrop-blur transition duration-300 hover:-translate-y-1.5 hover:border-white/20 hover:shadow-2xl hover:shadow-black/20"
                            >
                                <div
                                    class="absolute inset-y-0 left-0 w-1 rounded-l-[1.75rem] transition duration-300 group-hover:w-1.5"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                />
                                <div
                                    class="pointer-events-none absolute -right-16 -top-16 h-36 w-36 rounded-full bg-white/[0.03] blur-2xl transition duration-300 group-hover:bg-white/[0.05]"
                                    aria-hidden="true"
                                />

                                <div class="relative flex items-start gap-4">
                                    <div
                                        class="mt-0.5 flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.06] text-white/85 transition duration-300 group-hover:border-white/20 group-hover:bg-white/[0.1] group-hover:text-white"
                                    >
                                        <FontAwesomeIcon
                                            :icon="item.icon"
                                            class="text-base"
                                        />
                                    </div>

                                    <div>
                                        <h3
                                            class="text-base font-semibold text-white"
                                        >
                                            {{ item.title }}
                                        </h3>
                                        <p
                                            class="mt-2 text-sm leading-7 text-white/78"
                                        >
                                            {{ item.text }}
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="flex flex-col gap-5 md:pt-10">
                            <article
                                v-for="item in problemItems.slice(3, 6)"
                                :key="item.title"
                                class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.03] p-6 backdrop-blur transition duration-300 hover:-translate-y-1.5 hover:border-white/20 hover:shadow-2xl hover:shadow-black/20"
                            >
                                <div
                                    class="absolute inset-y-0 left-0 w-1 rounded-l-[1.75rem] transition duration-300 group-hover:w-1.5"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                />
                                <div
                                    class="pointer-events-none absolute -right-16 -top-16 h-36 w-36 rounded-full bg-white/[0.03] blur-2xl transition duration-300 group-hover:bg-white/[0.05]"
                                    aria-hidden="true"
                                />

                                <div class="relative flex items-start gap-4">
                                    <div
                                        class="mt-0.5 flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.06] text-white/85 transition duration-300 group-hover:border-white/20 group-hover:bg-white/[0.1] group-hover:text-white"
                                    >
                                        <FontAwesomeIcon
                                            :icon="item.icon"
                                            class="text-base"
                                        />
                                    </div>

                                    <div>
                                        <h3
                                            class="text-base font-semibold text-white"
                                        >
                                            {{ item.title }}
                                        </h3>
                                        <p
                                            class="mt-2 text-sm leading-7 text-white/78"
                                        >
                                            {{ item.text }}
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section
                aria-labelledby="process-title"
                class="border-t border-white/5 bg-[#0A1320]"
            >
                <div class="mx-auto max-w-6xl px-6 py-20">
                    <div
                        class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between"
                    >
                        <div class="max-w-3xl">
                            <p
                                class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                            >
                                <span
                                    class="h-2 w-2 rounded-full"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                />
                                Process
                            </p>

                            <h2
                                id="process-title"
                                class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                            >
                                How I work
                            </h2>

                            <p
                                class="mt-4 text-lg leading-relaxed text-white/80"
                            >
                                Clear scope, steady communication, and work
                                that’s designed to be useful long after launch.
                            </p>
                        </div>

                        <div class="text-sm text-white/70 sm:text-right">
                            <p>Response time</p>
                            <p class="mt-1 font-medium text-white/90">
                                Within 1 business day
                            </p>
                        </div>
                    </div>

                    <ol class="mt-10 grid gap-4 md:grid-cols-4">
                        <li
                            v-for="(step, index) in processSteps"
                            :key="step.title"
                        >
                            <article
                                class="h-full rounded-2xl border border-white/10 bg-white/[0.04] p-5 backdrop-blur transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.07] hover:shadow-xl hover:shadow-black/20"
                            >
                                <p class="text-sm text-white/70">
                                    {{ index + 1 }}. {{ step.title }}
                                </p>
                                <p
                                    class="mt-3 text-sm leading-relaxed font-medium text-white/90"
                                >
                                    {{ step.text }}
                                </p>
                            </article>
                        </li>
                    </ol>

                    <div
                        class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
                    >
                        <a
                            href="#contact"
                            class="rounded-xl px-5 py-3 text-center text-sm font-semibold text-white transition focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#0A1320] focus-visible:outline-none"
                            :style="{ background: primary }"
                        >
                            Start a conversation
                        </a>

                        <p
                            class="text-center text-sm text-white/70 sm:text-right"
                        >
                            Prefer email?
                            <a
                                class="rounded underline transition hover:text-white focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:outline-none"
                                :href="`mailto:${contactEmail}`"
                            >
                                {{ contactEmail }}
                            </a>
                        </p>
                    </div>
                </div>
            </section>

            <section
                id="about"
                aria-labelledby="about-title"
                class="border-t border-white/5 bg-[#09111c]"
            >
                <div
                    class="mx-auto grid max-w-6xl gap-10 px-6 py-20 md:grid-cols-12 md:items-start"
                >
                    <div class="md:col-span-7">
                        <p
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                        >
                            <span
                                class="h-2 w-2 rounded-full"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            ></span>
                            About Kevin
                        </p>

                        <h2
                            id="about-title"
                            class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                        >
                            Senior full stack engineer with a practical,
                            product-minded approach
                        </h2>

                        <div class="mt-6 space-y-4 text-white/80">
                            <p class="leading-relaxed">
                                I enjoy building software that is simple,
                                reliable, and useful for the people who depend
                                on it. My background is in full stack
                                development across Laravel, Vue, React,
                                TypeScript, APIs, and AWS.
                            </p>

                            <p class="leading-relaxed">
                                I work best with teams and businesses that value
                                clear thinking, clean execution, direct
                                communication, and solutions that actually
                                support day-to-day operations.
                            </p>

                            <p class="leading-relaxed">
                                Whether the project is a custom application, an
                                API, an internal tool, or a business website, my
                                goal is always the same: build something solid,
                                understandable, and worth maintaining.
                            </p>
                        </div>
                    </div>

                    <aside
                        class="md:col-span-5"
                        aria-labelledby="at-a-glance-title"
                    >
                        <div
                            class="rounded-2xl border border-white/10 bg-white/[0.05] p-6 backdrop-blur transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.08] hover:shadow-2xl hover:shadow-black/20"
                        >
                            <h3
                                id="at-a-glance-title"
                                class="font-semibold text-white"
                            >
                                At a glance
                            </h3>

                            <dl class="mt-5 space-y-3">
                                <div
                                    v-for="stat in aboutStats"
                                    :key="stat.label"
                                    class="rounded-xl border border-white/10 bg-black/20 p-4 transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-black/30 hover:shadow-xl hover:shadow-black/20"
                                >
                                    <dt class="text-sm text-white/70">
                                        {{ stat.label }}
                                    </dt>
                                    <dd
                                        class="mt-2 text-sm font-medium text-white/90"
                                    >
                                        {{ stat.value }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </aside>
                </div>
            </section>

            <section
                aria-labelledby="tech-title"
                class="border-t border-white/5 bg-[#0A1320]"
            >
                <div class="mx-auto max-w-6xl px-6 py-20">
                    <div class="max-w-3xl">
                        <p
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                        >
                            <span
                                class="h-2 w-2 rounded-full"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            ></span>
                            Technologies
                        </p>

                        <h2
                            id="tech-title"
                            class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                        >
                            Tools I work with
                        </h2>

                        <p class="mt-4 text-lg leading-relaxed text-white/80">
                            I focus on dependable, widely used tools that make
                            it easier to build clean products, maintain them
                            over time, and move quickly without unnecessary
                            complexity.
                        </p>
                    </div>

                    <ul class="mt-10 grid gap-4 md:grid-cols-3" role="list">
                        <li v-for="group in techGroups" :key="group.title">
                            <section
                                class="h-full rounded-2xl border border-white/10 bg-white/[0.04] p-6 transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.07] hover:shadow-xl hover:shadow-black/20"
                                :aria-labelledby="`tech-${group.title.toLowerCase().replace(/[^a-z0-9]+/g, '-')}`"
                            >
                                <h3
                                    :id="`tech-${group.title.toLowerCase().replace(/[^a-z0-9]+/g, '-')}`"
                                    class="font-semibold text-white"
                                >
                                    {{ group.title }}
                                </h3>

                                <ul
                                    class="mt-5 flex flex-wrap gap-2"
                                    role="list"
                                >
                                    <li v-for="item in group.items" :key="item">
                                        <span
                                            class="rounded-full border border-white/10 bg-black/20 px-3 py-1 text-sm text-white/85 transition duration-300 hover:border-white/20 hover:bg-black/30"
                                        >
                                            {{ item }}
                                        </span>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
            </section>

            <section
                id="contact"
                aria-labelledby="contact-title"
                class="border-t border-white/5 bg-[#09111c]"
            >
                <div class="mx-auto max-w-6xl px-6 py-20">
                    <div class="grid gap-10 md:grid-cols-12">
                        <div class="md:col-span-5">
                            <p
                                class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                            >
                                <span
                                    class="h-2 w-2 rounded-full"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                ></span>
                                Contact
                            </p>

                            <h2
                                id="contact-title"
                                class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                            >
                                Let’s talk about your project
                            </h2>

                            <p
                                class="mt-4 max-w-xl text-lg leading-relaxed text-white/80"
                            >
                                Whether you need a custom app, API work,
                                improvements to an existing product, or a better
                                business website, send me a note and I’ll get
                                back to you.
                            </p>

                            <div class="mt-8 space-y-3 text-sm text-white/80">
                                <p>
                                    Email:
                                    <a
                                        :href="`mailto:${contactEmail}`"
                                        class="rounded underline transition hover:text-white focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:outline-none"
                                    >
                                        {{ contactEmail }}
                                    </a>
                                </p>
                                <p>Response time: Within 1 business day</p>
                            </div>
                        </div>

                        <div class="md:col-span-7">
                            <div
                                class="rounded-2xl border border-white/10 bg-white/[0.05] p-6 backdrop-blur transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.08] hover:shadow-2xl hover:shadow-black/20"
                            >
                                <Form
                                    action="/contact"
                                    method="post"
                                    reset-on-success
                                    :options="{ preserveScroll: true }"
                                    v-slot="{ errors, processing }"
                                    class="grid gap-4"
                                >
                                    <div class="grid gap-4 sm:grid-cols-2">
                                        <div>
                                            <label
                                                class="mb-2 block text-sm text-white/85"
                                                for="name"
                                            >
                                                Name
                                            </label>
                                            <input
                                                id="name"
                                                name="name"
                                                type="text"
                                                autocomplete="name"
                                                required
                                                class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white transition outline-none placeholder:text-white/45 focus:border-white/25 focus:bg-black/40 focus-visible:ring-2 focus-visible:ring-white/70"
                                                placeholder="Your name"
                                            />
                                            <InputError
                                                :message="errors.name"
                                                class="mt-2"
                                            />
                                        </div>

                                        <div>
                                            <label
                                                class="mb-2 block text-sm text-white/85"
                                                for="email"
                                            >
                                                Email
                                            </label>
                                            <input
                                                id="email"
                                                name="email"
                                                type="email"
                                                inputmode="email"
                                                autocomplete="email"
                                                required
                                                class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white transition outline-none placeholder:text-white/45 focus:border-white/25 focus:bg-black/40 focus-visible:ring-2 focus-visible:ring-white/70"
                                                placeholder="you@example.com"
                                            />
                                            <InputError
                                                :message="errors.email"
                                                class="mt-2"
                                            />
                                        </div>
                                    </div>

                                    <div>
                                        <label
                                            class="mb-2 block text-sm text-white/85"
                                            for="company"
                                        >
                                            Company
                                            <span class="text-white/55"
                                                >(optional)</span
                                            >
                                        </label>
                                        <input
                                            id="company"
                                            name="company"
                                            type="text"
                                            autocomplete="organization"
                                            class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white transition outline-none placeholder:text-white/45 focus:border-white/25 focus:bg-black/40 focus-visible:ring-2 focus-visible:ring-white/70"
                                            placeholder="Company or team name"
                                        />
                                        <InputError
                                            :message="errors.company"
                                            class="mt-2"
                                        />
                                    </div>

                                    <div>
                                        <label
                                            class="mb-2 block text-sm text-white/85"
                                            for="message"
                                        >
                                            What are you trying to build?
                                        </label>
                                        <textarea
                                            id="message"
                                            name="message"
                                            rows="6"
                                            required
                                            aria-describedby="message-help"
                                            class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white transition outline-none placeholder:text-white/45 focus:border-white/25 focus:bg-black/40 focus-visible:ring-2 focus-visible:ring-white/70"
                                            placeholder="A few details about the project, what you need help with, and any timeline you have in mind."
                                        ></textarea>
                                        <p
                                            id="message-help"
                                            class="mt-2 text-sm text-white/65"
                                        >
                                            A short summary is perfect. Include
                                            goals, timing, and anything already
                                            in place.
                                        </p>
                                        <InputError
                                            :message="errors.message"
                                            class="mt-2"
                                        />
                                    </div>

                                    <div class="pt-2">
                                        <button
                                            type="submit"
                                            :disabled="processing"
                                            class="inline-flex items-center justify-center rounded-lg px-6 py-3 text-sm font-semibold text-white transition focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#09111c] focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-70"
                                            :style="{ background: primary }"
                                        >
                                            <svg
                                                v-if="processing"
                                                class="mr-2 h-4 w-4 animate-spin"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                aria-hidden="true"
                                            >
                                                <circle
                                                    class="opacity-25"
                                                    cx="12"
                                                    cy="12"
                                                    r="10"
                                                    stroke="currentColor"
                                                    stroke-width="4"
                                                />
                                                <path
                                                    class="opacity-90"
                                                    fill="currentColor"
                                                    d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
                                                />
                                            </svg>
                                            {{
                                                processing
                                                    ? 'Sending...'
                                                    : 'Send message'
                                            }}
                                        </button>

                                        <InputError
                                            :message="errors.form"
                                            class="mt-3"
                                        />

                                        <p
                                            v-if="flashSuccess"
                                            class="mt-3 rounded-xl border border-emerald-400/20 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-200"
                                        >
                                            {{ flashSuccess }}
                                        </p>

                                        <p
                                            v-if="flashError"
                                            class="mt-3 rounded-xl border border-red-400/20 bg-red-400/10 px-4 py-3 text-sm text-red-200"
                                        >
                                            {{ flashError }}
                                        </p>
                                    </div>
                                </Form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-white/5 bg-[#08111d]">
            <div class="mx-auto max-w-6xl px-6 py-8 text-sm text-white/65">
                <p>
                    © {{ new Date().getFullYear() }} Kevin Whelan. All rights
                    reserved.
                </p>
            </div>
        </footer>
    </div>
</template>
