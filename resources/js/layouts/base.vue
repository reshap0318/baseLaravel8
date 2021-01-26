<template>
  <main>
        <HeaderMobile/>
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-row flex-column-fluid page">
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <mHeader/>
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="d-flex flex-column-fluid">
                            <div class="container">
                                <slot />
                            </div>
                        </div>
                    </div>
                    <!-- <mFooter/> -->
                </div>
            </div>
        </div>
        <QuickUser/>
        <Scrolltop/>
  </main>
</template>

<script>

    import HeaderMobile from './partials/_header-mobile'
    import mFooter from './partials/_footer/compact'
    import mHeader from './partials/_header'
    import Scrolltop from './partials/_extras/scrolltop'
    import QuickUser from './partials/_extras/offcanvas/quick-user'

    export default {
        components: {
            HeaderMobile,
            mFooter,
            mHeader,
            Scrolltop,
            QuickUser,
        },
        props: {
            title: String,
        },
        watch: {
            title: {
                immediate: true,
                    handler(title) {
                        if(title){
                            document.title = this.$inertia.page.props.app.name + ' | ' + title
                        }else{
                            document.title = title
                        }
                    },
                },
            },
        }
</script>