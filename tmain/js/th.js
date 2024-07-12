(function(global){var Language = {};

Language.pluralFormFunction = function (n) {
		return 'other';
	};


Language.bubble = Language.bubble || {};

Language.bubble.attention_grabber = {
	"message": "ดึงดูดความสนใจให้กับแชท"
};


Language.chat = Language.chat || {};

Language.chat.Warning = {
	"message": "คำเตือน"
};
Language.chat.accept_call = {
	"message": "ยอมรับ"
};
Language.chat.active = {
	"message": "ที่ใช้งานอยู่"
};
Language.chat.agent_profile_image = {
	"message": "รูปโปรไฟล์ตัวแทน"
};
Language.chat.agent_ringing = {
	"message": "มีสายเรียกเข้า"
};
Language.chat.all_conversations = {
	"message": "ดูการสนทนาทั้งหมด"
};
Language.chat.call_end_details = {
	"message": "เริ่มวันที่ #startedOn และสิ้นสุด #duration",
	"vars": [
		"startedOn",
		"duration"
	]
};
Language.chat.call_error_load = {
	"message": "ไม่สามารถโหลดรายละเอียดการโทร"
};
Language.chat.call_started_on = {
	"message": "เริ่มวันที่ #startedOn",
	"vars": [
		"startedOn"
	]
};
Language.chat.chatEnded = {
	"message": "แชทของคุณจบแล้ว"
};
Language.chat.chat_icon = {
	"message": "ไอคอนแชท"
};
Language.chat.chat_qm = {
	"message": "แชท?"
};
Language.chat.chat_text = {
	"message": "แชท"
};
Language.chat.close_icon = {
	"message": "ไอคอนปิด"
};
Language.chat.completed_call = {
	"message": "สิ้นสุดการโทร"
};
Language.chat.conversation_ended_on = {
	"message": "Conversation ended on"
};
Language.chat.decline_call = {
	"message": "ปฏิเสธสาย"
};
Language.chat.defaultName = {
	"message": "คุณ (เปลี่ยนชื่อ)"
};
Language.chat.departmentIsAway = {
	"message": "แผนก #strongStart #departmentName #strongEnd ไม่อยู่หน้าจอ",
	"vars": [
		"departmentName",
		"strongStart",
		"strongEnd"
	]
};
Language.chat.departmentIsOffline = {
	"message": "แผนก #strongStart #departmentName #strongEnd กำลังออฟไลน์ คุณอาจจะได้รับบริการจากแผนกอื่นแทน",
	"vars": [
		"departmentName",
		"strongStart",
		"strongEnd"
	]
};
Language.chat.download = {
	"message": "ดาวน์โหลด"
};
Language.chat.downloadFile = {
	"message": "ดาวน์โหลดไฟล์"
};
Language.chat.dragDropText = {
	"message": "วางไฟล์ตรงนี้เพื่ออัพโหลด"
};
Language.chat.emoji_error_load = {
	"message": "ไม่สามารถแสดงอีโมจิได้"
};
Language.chat.error_title = {
	"message": "มีข้อผิดพลาด"
};
Language.chat.failed = {
	"message": "ล้มเหลว"
};
Language.chat.generalUploadError = {
	"message": "\"#fileName\", โปรดลองอีกครั้ง.",
	"vars": [
		"fileName"
	]
};
Language.chat.generalUploadErrorLabel = {
	"message": "ไม่สามารถอัพโหลดไฟล์ได้"
};
Language.chat.goToLatest = {
	"message": "ไปที่ล่าสุด"
};
Language.chat.hideButton = {
	"message": "ซ่อนแชท"
};
Language.chat.incoming_call_message = {
	"message": "มีสายเรียกเข้าจาก #name",
	"vars": [
		"name"
	]
};
Language.chat.insert_emoji = {
	"message": "แทรกอีโมจิ"
};
Language.chat.justNow = {
	"message": "เมื่อสักครู่นี้"
};
Language.chat.limit2 = {
	"message": "ขนาดแฟ้มสูงสุด 2MB สำหรับเบราว์เซอร์โทรศัพท์มือถือ โปรดอัปโหลดแฟ้มขนาดเล็ก"
};
Language.chat.limit50 = {
	"message": "ขนาดไฟล์สูงสุดที่สามารถ อัพโหลดได้ คือ 50 Mb กรุณาอัพโหลดไฟล์ที่มีขนาดไม่ใหญ่มากไป"
};
Language.chat.message_not_delivered = {
	"message": "ข้อความส่งไม่ติด, คลิกที่นี่เพื่อส่งอีกครั้ง"
};
Language.chat.message_too_long = {
	"message": "ข้อความต้องไม่เกิน 5,000 ตัวอักษร"
};
Language.chat.missed_agent = {
	"message": "ไม่สามารถติดต่อได้"
};
Language.chat.missed_visitor = {
	"message": "คุณไม่ได้รับสาย"
};
Language.chat.missed_visitor_messagePreview = {
	"message": "คุณไม่ได้รับสายจาก"
};
Language.chat.mobileName = {
	"message": "คุณ"
};
Language.chat.newChat = {
	"message": "เริ่มแชทใหม่"
};
Language.chat.newMessages = {
	"message": "ข้อความใหม่"
};
Language.chat.new_conversation = {
	"message": "การสนทนาใหม่"
};
Language.chat.notificationTitle = {
	"message": "การแจ้งเตือน"
};
Language.chat.ongoing_call = {
	"message": "กำลังสนทนา"
};
Language.chat.past = {
	"message": "#time ago",
	"vars": [
		"time"
	]
};
Language.chat.pasted_image_title = {
	"message": "แทรกภาพเมื่อ #dateTime",
	"vars": [
		"dateTime"
	]
};
Language.chat.profile_prechat_text = {
	"message": "กรุณากรอกแบบฟอร์มข้างล่างนี้เพื่อเริ่มการแชทกับฉัน"
};
Language.chat.rejected_call = {
	"message": "คุณปฏิเสธการรรับสาย"
};
Language.chat.remove_rate = {
	"message": "คุณได้ยกเลิกการให้คะแนนสำหรับการสนทนานี้"
};
Language.chat.resend = {
	"message": "ส่งใหม่อีกครั้ง"
};
Language.chat.retry = {
	"message": "ลองอีกครั้ง"
};
Language.chat.return_to_live_chat = {
	"message": "Return to live chat"
};
Language.chat.say_something = {
	"message": "เขียนข้อความตอบกลับ..."
};
Language.chat.screen_share_error = {
	"message": "ไม่สามารถแชร์หน้าจอได้ในขณะนี้"
};
Language.chat.send_mail = {
	"message": "ส่งจดหมาย"
};
Language.chat.sent_file = {
	"message": "ส่งไฟล์แล้ว"
};
Language.chat.today_time = {
	"message": "วันนี้, #time",
	"vars": [
		"time"
	]
};
Language.chat.tryAgain = {
	"message": "กรุณาลองอีกครั้ง"
};
Language.chat.unanswered = {
	"message": "ไม่ได้รับการตอบ"
};
Language.chat.uploading = {
	"message": "กำลังอัพโหลด..."
};
Language.chat.video_call_error = {
	"message": "ไม่สามารถโทรด้วยวีดีโอได้ในขณะนี้"
};
Language.chat.visitor_ringing = {
	"message": "กำลังโทร..."
};
Language.chat.voice_call_error = {
	"message": "ไม่สามารถโทรด้วยเสียงได้ในขณะนี้"
};
Language.chat.we_are_live = {
	"message": "เราอยู่ที่นี่และพร้อมที่จะแชทกับคุณตอนนี้ พูดอะไรบางอย่างเพื่อเริ่มการแชทสด"
};


Language.days = Language.days || {};

Language.days['0'] = {
	"message": "วันอาทิตย์"
};
Language.days['1'] = {
	"message": "วันจันทร์"
};
Language.days['2'] = {
	"message": "วันอังคาร"
};
Language.days['3'] = {
	"message": "วันพุธ"
};
Language.days['4'] = {
	"message": "วันพฤหัสบดี"
};
Language.days['5'] = {
	"message": "วันศุกร์"
};
Language.days['6'] = {
	"message": "วันเสาร์"
};


Language.form = Language.form || {};

Language.form.CancelButton = {
	"message": "ยกเลิก"
};
Language.form.CloseButton = {
	"message": "ปิด"
};
Language.form.DepartmentsErrorMessage = {
	"message": "ต้องกรอกชื่อแผนก"
};
Language.form.DepartmentsPlaceholder = {
	"message": "เลือกแผนก.."
};
Language.form.EmailErrorMessage = {
	"message": "ที่อยู่อีเมลไม่ถูกต้อง"
};
Language.form.EmailPlaceholder = {
	"message": "อีเมล"
};
Language.form.EmailTranscriptFormMessage = {
	"message": "กรุณากรอกแบบฟอร์มข้างล่างนี้เพื่อส่งการสนทนานี้ไปยังที่อยู่อีเมลของคุณ"
};
Language.form.EmailTranscriptSuccess = {
	"message": "ส่งคำขอถอดเสียงอีเมลแล้ว"
};
Language.form.EmailTranscriptTo = {
	"message": "อีเมลข้อความถึง"
};
Language.form.EndChatMessage = {
	"message": "ขอบคุณสำหรับการสนทนา คุณสามารถเริ่มต้นการสนทนาใหม่ หรือกรอกอีเมล์เพื่อส่งบทสนทนานี้ไปยังกล่องข้อความของคุณ"
};
Language.form.EndChatMessage2 = {
	"message": "ขอบคุณที่แชทกับเรา โปรดอย่าลังเลที่จะเริ่มต้นเซสชันการแชทใหม่"
};
Language.form.EndChatTitle = {
	"message": "คุณแน่ใจหรือไม่ว่าต้องการจบการสนทนานี้?"
};
Language.form.MessagePlaceholder = {
	"message": "ข้อความของคุณ.."
};
Language.form.NameErrorMessage = {
	"message": "ต้องกรอกชื่อ"
};
Language.form.NameFormMessage = {
	"message": "กรุณาเปลี่ยนชื่อของคุณเพื่อให้เราสามารถจดจำคุณในครั้งถัดไป"
};
Language.form.OfflineFormMessage = {
	"message": "กรุณากรอกแบบฟอร์มข้างล่างนี้ แล้วเราจะติดต่อกลับไปหาคุณอย่างเร็วที่สุดเท่าที่จะทำได้"
};
Language.form.OfflineMessageNotSent = {
	"message": "ส่งข้อความไม่สำเร็จ, โปรดลองอีกครั้ง"
};
Language.form.OfflineMessageSent = {
	"message": "ส่งข้อความของคุณเรียบร้อยแล้ว"
};
Language.form.PhoneErrorMessage = {
	"message": "หมายเลขโทรศัพท์ไม่ถูกต้อง"
};
Language.form.PreChatFormMessage = {
	"message": "กรุณากรอกแบบฟอร์มข้างล่างนี้เพื่อเริ่มการแชทกับตัวแทนคนต่อไปที่ว่าง"
};
Language.form.PreChatFormMessageProfile = {
	"message": "กรุณากรอกแบบฟอร์มข้างล่างนี้เพื่อเริ่มการแชทกับฉัน"
};
Language.form.QuestionPlaceholder = {
	"message": "คำถามของคุณ.."
};
Language.form.RequiredErrorMessage = {
	"message": "ช่องนี้จำเป็นต้องกรอก"
};
Language.form.SaveButton = {
	"message": "บันทึก"
};
Language.form.SendButton = {
	"message": "ส่ง"
};
Language.form.SendMessage = {
	"message": "ส่งข้อความ"
};
Language.form.StartChatButton = {
	"message": "เริ่มการสนทนา"
};
Language.form.SubmitButton = {
	"message": "ส่ง"
};
Language.form.SubmittedFrom = {
	"message": "ส่งจาก"
};
Language.form.SubmittingProcess = {
	"message": "กำลังส่ง"
};
Language.form.TranscriptMessage = {
	"message": "คุณสามารถกรอกอีเมล์ เพื่อส่งบันทึกการสนทนาไปยังกล่องข้อความขาเข้าของคุณ"
};
Language.form.any = {
	"message": "อย่างใดอย่างหนึ่ง"
};
Language.form.chatEnded = {
	"message": "แชทของคุณจบแล้ว"
};
Language.form.department = {
	"message": "แผนก/ทีม"
};
Language.form.email = {
	"message": "อีเมล"
};
Language.form.errorSaving = {
	"message": "ไม่สามารถบันทึกได้ กรุณาลองใหม่อีกครั้ง"
};
Language.form.message = {
	"message": "ข้อความ"
};
Language.form.name = {
	"message": "ชื่อ"
};
Language.form.sendAgain = {
	"message": "โปรดส่งอีกครั้ง"
};
Language.form.visitButton = {
	"message": "เข้าเว็บไซต์ tawk.to"
};


Language.home = Language.home || {};

Language.home.banner_image = {
	"message": "ภาพแบนเนอร์"
};
Language.home.chat_button = {
	"message": "การสนทนาใหม่"
};
Language.home.chat_input = {
	"message": "พิมพ์ที่นี่แล้วกด enter.."
};
Language.home.heading_main = {
	"message": "สวัสดี 👋"
};
Language.home.heading_sub = {
	"message": "ต้องการความช่วยเหลือหรือ ค้นหาคำตอบในศูนย์ช่วยเหลือของเราหรือเริ่มการสนทนา:"
};
Language.home.kb_search = {
	"message": "ค้นหาคำตอบ"
};
Language.home.logo_image = {
	"message": "ภาพโลโก้"
};


Language.kb = Language.kb || {};

Language.kb.article_image = {
	"message": "ภาพบทความ"
};
Language.kb.article_rating = {
	"message": "บทความนี้มีประโยชน์หรือไม่"
};
Language.kb.article_rating_count = {
	"message": "#totalLikes จาก #totalVotes ชอบบทความนี้",
	"vars": [
		"totalLikes",
		"totalVotes"
	]
};
Language.kb.author_profile_image = {
	"message": "รูปโปรไฟล์ของผู้เขียน"
};
Language.kb.clear_search = {
	"message": "ล้างการค้นหา"
};
Language.kb.downvote_rating_button = {
	"message": "No"
};
Language.kb.help_center = {
	"message": "ศูนย์ช่วยเหลือ"
};
Language.kb.negative_rating = {
	"message": "รู้สึกไม่ดี"
};
Language.kb.positive_rating = {
	"message": "รู้สึกดี"
};
Language.kb.recent_searches = {
	"message": "การค้นหาล่าสุด"
};
Language.kb.search_fail_description = {
	"message": "โปรดลองใหม่"
};
Language.kb.search_fail_title = {
	"message": "ไม่พบผลการค้นหา"
};
Language.kb.search_placeholder = {
	"message": "ค้นหาคำตอบ"
};
Language.kb.search_results = {
	"message": "ผลการค้นหา"
};
Language.kb.show_all_results = {
	"message": "แสดงผลลัพธ์ทั้งหมด (#num)",
	"vars": [
		"num"
	]
};
Language.kb.submit_search = {
	"message": "ส่งการค้นหา"
};
Language.kb.upvote_rating_button = {
	"message": "Yes"
};
Language.kb.view_full = {
	"message": "ดูแบบเต็ม"
};


Language.menu = Language.menu || {};

Language.menu.add_chat_to_your_website = {
	"message": "Add Chat to your website"
};
Language.menu.change_name = {
	"message": "เปลี่ยนชื่อ"
};
Language.menu.email_transcript = {
	"message": "ส่งอีเมลสำเนาข้อความ"
};
Language.menu.end_chat_session = {
	"message": "จบการสนทนานี้"
};
Language.menu.popout_widget = {
	"message": "เปิดหน้าต่างสนทนาในแท็บใหม่"
};
Language.menu.sound_off = {
	"message": "ปิดเสียง"
};
Language.menu.sound_on = {
	"message": "เปิดเสียง"
};


Language.months = Language.months || {};

Language.months['0'] = {
	"message": "มกราคม"
};
Language.months['1'] = {
	"message": "กุมภาพันธ์"
};
Language.months['10'] = {
	"message": "พฤศจิกายน"
};
Language.months['11'] = {
	"message": "ธันวาคม"
};
Language.months['2'] = {
	"message": "มีนาคม"
};
Language.months['3'] = {
	"message": "เมษายน"
};
Language.months['4'] = {
	"message": "พฤษภาคม"
};
Language.months['5'] = {
	"message": "มิถุนายน"
};
Language.months['6'] = {
	"message": "กรกฎาคม"
};
Language.months['7'] = {
	"message": "สิงหาคม"
};
Language.months['8'] = {
	"message": "กันยายน"
};
Language.months['9'] = {
	"message": "ตุลาคม"
};


Language.notifications = Language.notifications || {};

Language.notifications.dismiss_alert = {
	"message": "ปิดการแจ้งเตือน"
};
Language.notifications.maximum_file_upload_warning = {
	"message": "ขออภัย, จำกัดการส่งไม่เกิน #limitFileNumber ไฟล์ กรุณาลองใหม่อีกครั้ง",
	"vars": [
		"limitFileNumber"
	]
};
Language.notifications.maximum_size_upload_warning = {
	"message": "ขออภัย สามารถส่งไฟล์ได้ไม่เกิน #limitFileSize กรุณาลองใหม่อีกครั้ง",
	"vars": [
		"limitFileSize"
	]
};
Language.notifications.reconnecting = {
	"message": "กำลังเชื่อมต่ออีกครั้ง"
};
Language.notifications.retry = {
	"message": "ลองอีกครั้ง"
};


Language.overlay = Language.overlay || {};

Language.overlay.cookiesOff = {
	"message": "คุณไม่สามารถใช้แชทนี้ได้เพราะการใช้งานคุกกี้ของเบราว์เซอร์คุณถูกปิด กรุณาเปิดมันและรีเฟรชเบราว์เซอร์ของคุณใหม่"
};
Language.overlay.inactive = {
	"message": "คลิกที่นี่เพื่อเริ่มต้นแชทอีกครั้ง"
};
Language.overlay.maintenance = {
	"message": "แชทกำลังอยู่ในระหว่างการปรับปรุง"
};
Language.overlay.tawkContent = {
	"message": "เครื่องมือนี้ถูกขับเคลื่อน โดย tawk.to - โปรแกรมส่งข้อความฟรีที่ช่วยให้คุณตรวจสอบดูแล และมีส่วนร่วมกับผู้เข้าชมเว็บไซต์ของคุณ"
};


Language.rollover = Language.rollover || {};

Language.rollover.back = {
	"message": "ย้อนกลับ"
};
Language.rollover.chatMenu = {
	"message": "เมนู"
};
Language.rollover.emailTranscriptOption = {
	"message": "ส่งอีเมลสำเนาข้อความ"
};
Language.rollover.end = {
	"message": "หยุดการแชท"
};
Language.rollover.knowledgeBase = {
	"message": "เรียนรู้การใช้งาน"
};
Language.rollover.maximize = {
	"message": "ขยายใหญ่"
};
Language.rollover.minimize = {
	"message": "ย่อลง"
};
Language.rollover.negativeRating = {
	"message": "ให้คะแนนการสนทนานี้ด้วยคะแนน -1"
};
Language.rollover.popOut = {
	"message": "เด้งออก"
};
Language.rollover.positiveRating = {
	"message": "ให้คะแนนการสนทนานี้ด้วยคะแนน +1"
};
Language.rollover.rateChat = {
	"message": "ให้คะแนนแชทนี้"
};
Language.rollover.resendMessage = {
	"message": "ส่งข้อความอีกครั้ง"
};
Language.rollover.resize = {
	"message": "เปลี่ยนขนาด"
};
Language.rollover.screenShare = {
	"message": "แชร์หน้าจอ"
};
Language.rollover.uploadFile = {
	"message": "อัปโหลดไฟล์"
};
Language.rollover.videoCall = {
	"message": "โทรด้วยวีดีโอ"
};
Language.rollover.voiceCall = {
	"message": "โทรด้วยเสียง"
};


Language.routes = Language.routes || {};

Language.routes.all_agents = {
	"message": "ตัวแทนทั้งหมด"
};
Language.routes.conversations = {
	"message": "การสนทนา"
};
Language.routes.load_more = {
	"message": "โหลดเพิ่มเติม"
};


Language.status = Language.status || {};

Language.status.away = {
	"message": "ไม่อยู่หน้าจอ"
};
Language.status.offline = {
	"message": "ออฟไลน์"
};
Language.status.online = {
	"message": "ออนไลน์"
};




Language.chat = Language.chat || {};

Language.chat.hours = {
	"pluralVars": [
		"num"
	],
	"message": {
		"other": "#num ชั่วโมง"
	}
};
Language.chat.messageQueuedText = {
	"pluralVars": [
		"t"
	],
	"message": {
		"other": "เวลารอประมาณ #strongStart #t นาที #strongEnd"
	},
	"vars": [
		"strongStart",
		"strongEnd"
	]
};
Language.chat.minutes = {
	"pluralVars": [
		"num"
	],
	"message": {
		"other": "#num นาที"
	}
};
Language.chat.newMessage = {
	"pluralVars": [
		"num"
	],
	"message": {
		"other": "ข้อความใหม่ #num ข้อความ"
	}
};
Language.chat.seconds = {
	"pluralVars": [
		"num"
	],
	"message": {
		"other": "#num วินาที"
	}
};


global.$_Tawk.language = Language;})(window);