import{d as u,T as f,c,w as n,o as w,a as e,u as o,Z as _,b as t,e as V,n as g,f as v}from"./app-C5IldEcd.js";import{_ as l,a as m}from"./TextInput.vue_vue_type_script_setup_true_lang-COyazjSy.js";import{_ as i}from"./InputLabel.vue_vue_type_script_setup_true_lang-BuhHF0Xy.js";import{P as b}from"./PrimaryButton-BLr2sEaB.js";import{_ as k}from"./GuestLayout.vue_vue_type_script_setup_true_lang-CyVSCs2i.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./ApplicationLogo-BXT6W1Oz.js";const x={class:"mt-4"},y={class:"mt-4"},T=u({__name:"Register",props:{invitation:{}},setup(d){const s=f({name:"",email:d.invitation.email,password:"",password_confirmation:""}),p=()=>{s.post(route("invite.register"),{onFinish:()=>{s.reset("password","password_confirmation")}})};return(C,a)=>(w(),c(k,null,{default:n(()=>[e(o(_),{title:"Register"}),t("form",{onSubmit:v(p,["prevent"])},[t("div",null,[e(i,{for:"name",value:"Name"}),e(l,{id:"name",type:"text",class:"mt-1 block w-full",modelValue:o(s).name,"onUpdate:modelValue":a[0]||(a[0]=r=>o(s).name=r),required:"",autofocus:"",autocomplete:"name"},null,8,["modelValue"]),e(m,{class:"mt-2",message:o(s).errors.name},null,8,["message"])]),t("div",x,[e(i,{for:"password",value:"Password"}),e(l,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:o(s).password,"onUpdate:modelValue":a[1]||(a[1]=r=>o(s).password=r),required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(m,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),t("div",y,[e(i,{for:"password_confirmation",value:"Confirm Password"}),e(l,{id:"password_confirmation",type:"password",class:"mt-1 block w-full",modelValue:o(s).password_confirmation,"onUpdate:modelValue":a[2]||(a[2]=r=>o(s).password_confirmation=r),required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(m,{class:"mt-2",message:o(s).errors.password_confirmation},null,8,["message"])]),e(b,{class:g(["ms-4",{"opacity-25":o(s).processing}]),disabled:o(s).processing},{default:n(()=>a[3]||(a[3]=[V(" Submit ")])),_:1},8,["class","disabled"])],32)]),_:1}))}});export{T as default};