<template>
  <ClientsVue test="resrasdasd" />
  <AboutVue />
  <WhyusVue />
  <SkillsVue />
  <ServicesVue />
  <CtaVue />
  <PortfolioVue />
  <TeamVue />
  <FaqVue />
  <contactVue />
</template>

<script>
import ClientsVue from "./Section/Clients.vue";
import AboutVue from "./Section/About.vue";
import ServicesVue from "./Section/Services.vue";
import WhyusVue from "./Section/Whyus.vue";
import SkillsVue from "./Section/Skills.vue";
import CtaVue from "./Section/Cta.vue";
import PortfolioVue from "./Section/Portfolio.vue";
import TeamVue from "./Section/Team.vue";
import FaqVue from "./Section/Faq.vue";
import contactVue from "./Section/Contact.vue";

export default {
  components: {
    ClientsVue,
    AboutVue,
    ServicesVue,
    WhyusVue,
    SkillsVue,
    CtaVue,
    PortfolioVue,
    TeamVue,
    FaqVue,
    contactVue,
  },
  props: {
    name: String,
  },
};
</script>
