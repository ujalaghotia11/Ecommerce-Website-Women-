"use strict";(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[68357],{272965:(e,t,i)=>{i.r(t),i.d(t,{default:()=>C});var n=i(667294),o=i(545007),s=i(883119),a=i(161881),r=i(903591),_=i(53264),m=i(214877),l=i(454514),d=i(140017),c=i(96452),u=i(13848),p=i(149722),g=i(413110),f=i(923368),A=i(930822),h=i(785893);function C({aggregatedPinDataId:e,closeupAttributionId:t,commentCount:i,disablePhotoCommentSelection:C,isDesktopSheetModal:y=!1,isEligibleForPinReactions:S,isPDP:x,orbacSubjectId:D,pinId:E,privatePin:L,reactionByMe:N,reactionCounts:O,setIsLoadingNewlyCreatedComment:P,showCommentComposer:j,showReactBackground:v,storyPinDataId:w,viewParameter:I}){let b;let B=(0,d.ZP)(),M=(0,p.Z)(),Z=(0,o.I0)(),{logContextEvent:k}=(0,m.v)(),T=(0,a.Z)(),{showOneToast:U}=(0,u.F9)(),{inCommentFooterRedesignExp:z,stackedCloseupEnabled:H}=(0,f.x4)(),[K,R]=(0,n.useState)(!1),[W,F]=(0,n.useState)(r.A9.NONE);async function J(i){let{contentMarkdown:n,force:o,imageSignatures:s,tags:a}=i;if(null===e)return!1;P(!0);try{if(e){if(s.length){let t={aggregatedPinDataId:e,details:n,image_signatures:s,pin_id:E??"",username:M.username||"",fromUnifiedComment:!0};await Z((0,A.DD)(t))}else await T({force:o,fromUnifiedComment:!0,objectType:g.o.pin,objectId:e,pinId:E,tags:a,text:n,orbacSubjectId:D});k({event_type:7,object_id_str:E,aux_data:{num_user_mention_tags:(a?JSON.parse(a):[]).length,...w?{creator_id:t,story_pin_data_id:w}:{}}})}}catch(e){return[c.ky,c.LJ].includes(e.api_error_code)?F(e.api_error_code===c.ky?r.A9.WARNING:r.A9.BLOCK):U(({hideToast:t})=>(0,h.jsx)(l.ZP,{onHide:t,text:e.message_detail||e.message||B._('There was an issue posting your comment.', 'comment.post.errorMessage', 'error message for posting comment in toast'),type:"error"})),P(!1),!1}return R(!1),P(!1),!0}return b=x?H?2:8:H?1:0,(0,h.jsx)(s.xu,{marginEnd:b,marginStart:H?2:x?z?8:6:0,width:y?"100%":void 0,children:(0,h.jsx)(_.Z,{commentCount:i,commentWarningModalState:W,disablePhotoCommentSelection:C,dismissCommentWarningModal:()=>F(r.A9.NONE),iconSize:x?20:void 0,isCloseup:H,isDesktopSheetModal:y,isEligibleForPinReactions:S,isLeftAligned:x,objectType:g.o.pin,onAddItem:J,onCancelItem:()=>R(!1),onEnter:()=>R(!0),pinId:E,privatePin:L,reactionByMe:N,reactionCounts:O,showCommentComposer:j,showReactBackground:!x&&v,statusType:K?"textInflightCreation":"textStaticDisplay",viewParameter:I})})}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/app-common-react-components-closeup-CloseupBody-CloseupInlineCommentComposer-21718af330a954d4.mjs.map