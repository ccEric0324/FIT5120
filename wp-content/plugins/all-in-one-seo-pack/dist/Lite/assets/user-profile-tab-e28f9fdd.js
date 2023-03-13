import{n as a,V as n}from"./js/_plugin-vue2_normalizer.61652a7c.js";import"./js/index.b661d021.js";import{a as l}from"./js/vuex.esm.8fdeb4b6.js";import{k as c,m as r,s as p}from"./js/index.83e63cda.js";import{C as u}from"./js/Card.fbb39c92.js";import{C as m}from"./js/SocialProfiles.b2f616d2.js";import{S as d}from"./js/LogoGear.16108a75.js";import{e as f}from"./js/elemLoaded.9a6eb745.js";import"./js/client.e62d6c37.js";import"./js/_commonjsHelpers.f84db168.js";import"./js/translations.c394afe3.js";import"./js/default-i18n.3a91e0e5.js";import"./js/Caret.6d7f2e24.js";import"./js/helpers.de7566d0.js";import"./js/constants.59a77347.js";import"./js/isArrayLikeObject.cf278c5f.js";import"./js/portal-vue.esm.98f2e05b.js";import"./js/Tooltip.68a8a92b.js";import"./js/Slide.15a07930.js";import"./js/Checkbox.60ba2f56.js";import"./js/Checkmark.f26f6201.js";import"./js/Textarea.ce149d81.js";import"./js/SettingsRow.edbb3005.js";import"./js/Row.830f6397.js";import"./js/Twitter.79b93d10.js";const h={components:{CoreCard:u,CoreSocialProfiles:m,SvgLogoGear:d},data(){return{activeTabIndex:0,strings:{socialProfiles:this.$t.__("Social Profiles",this.$td),description:this.$t.__("To let search engines know which profiles are associated with this user, enter them below:",this.$td)}}},methods:{setActiveTab(s){const e=this.activeTabIndex;switch(this.activeTabIndex=s,this.activeTabObject.slug){case"personal-options":document.getElementById("your-profile").childNodes.forEach(t=>{t.style&&(t.style.display="block")});break;case"social-profiles":document.getElementById("your-profile").childNodes.forEach(t=>{t.id==="aioseo-user-profile-tab"||t.className==="submit"||!t.style||(t.style.display="none")});break;case"customer-data":this.activeTabIndex=e,window.location.href=this.$aioseo.urls.home+"/wp-admin/admin.php?page=followup-emails-reports&tab=reportuser_view&email="+encodeURIComponent(this.userProfile.userData.user_email)+"&user_id="+this.userProfile.userData.ID;break}},updateHiddenInputField(s){document.getElementById("aioseo-user-social-profiles").value=JSON.stringify(s)}},computed:{...l(["userProfile","options"]),tabs(){const s=[{label:this.$t.__("Personal Options",this.$td),slug:"personal-options"},{label:this.$t.__("Social Profiles",this.$td),slug:"social-profiles",svg:"svg-logo-gear"}];return this.userProfile.isWooCommerceFollowupEmailsActive&&s.push({label:this.$t.__("Customer Data",this.$td),slug:"customer-data"}),s},activeTabObject(){return this.tabs[this.activeTabIndex]}},created(){this.$store.state.loaded||c({}),this.$set(this.$store.state,"userProfile",r({...this.$store.state.userProfile},{...this.$aioseo.userProfile})),this.$set(this.$store.state,"options",r({...this.$store.state.options},{...this.$aioseo.options})),this.$set(this.$store.state,"settings",r({...this.$store.state.settings},{...this.$aioseo.settings})),this.updateHiddenInputField(this.userProfile.profiles)},mounted(){const s=new URLSearchParams(window.location.search);s&&s.get("social-profiles")&&this.setActiveTab(1)}};var _=function(){var e=this,t=e._self._c;return t("div",{attrs:{id:"aioseo-user-profile-tab"}},[t("div",{staticClass:"navigation-bar"},e._l(e.tabs,function(o,i){return t("a",{key:i,class:{active:i===e.activeTabIndex},attrs:{href:"#"},on:{click:function(P){return e.setActiveTab(i)}}},[o.svg?t(o.svg,{tag:"component"}):e._e(),e._v(" "+e._s(o.label)+" ")],1)}),0),e.activeTabObject.slug==="social-profiles"?t("CoreCard",{attrs:{slug:"userProfiles","header-text":e.strings.socialProfiles,"no-slide":"",toggles:!1}},[t("div",{staticClass:"aioseo-settings-row aioseo-section-description"},[e._v(" "+e._s(e.strings.description)+" ")]),t("CoreSocialProfiles",{attrs:{userProfiles:e.userProfile.profiles},on:{updated:o=>e.updateHiddenInputField(o)}})],1):e._e()],1)},g=[],v=a(h,_,g,!1,null,null,null,null);const b=v.exports,y=()=>{const s=document.getElementById("your-profile");if(!s)return;const e=document.createElement("div");e.id="aioseo-user-profile-tab";const t=document.createElement("input");t.id="aioseo-user-social-profiles",t.name="aioseo-user-social-profiles",t.type="hidden",s.prepend(t),s.prepend(e)},$=()=>{new n({store:p,render:s=>s(b)}).$mount("#aioseo-user-profile-tab")};f("#your-profile","profilePageLoaded");document.addEventListener("animationstart",function(s){s.animationName==="profilePageLoaded"&&(y(),$())});
