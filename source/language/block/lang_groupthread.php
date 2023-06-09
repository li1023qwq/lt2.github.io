<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupthread.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupthread_fids' => '圈子ID',
	'groupthread_fids_comment' => '指定圈子ID，多个ID之间用 , 分割',
	'groupthread_gtids' => '圈子分类',
	'groupthread_gtids_comment' => '选择圈子分类',
	'groupthread_uids' => '楼主UID',
	'groupthread_uids_comment' => '指定主题作者ID，多个ID之间用 , 分割',
	'groupthread_keyword' => '标题关键字',
	'groupthread_keyword_comment' => '设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'groupthread_startrow' => '起始数据行数',
	'groupthread_startrow_comment' => '如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'groupthread_items' => '显示数据条数',
	'groupthread_items_comment' => '设置一次显示的主题条目数，请设置为大于 0 的整数',
	'groupthread_titlelength' => '标题最大字节数',
	'groupthread_maxlength_comment' => '设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'groupthread_fnamelength' => '标题最大字节数包含版块名称',
	'groupthread_fnamelength_comment' => '设置标题长度是否将所在版块名称的长度一同计算在内',
	'groupthread_summarylength' => '主题简短内容文字数',
	'groupthread_summarylength_comment' => '设置主题简短内容的文字数，0 为使用默认值 255',
	'groupthread_picpre' => '前缀图标',
	'groupthread_picpre_comment' => '设置是否在主题前加入图片形式的图标，输入图片的 URL (绝对或相对)地址即可，留空为不显示前缀图标',
	'groupthread_tids' => '指定主题',
	'groupthread_tids_comment' => '设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'groupthread_keyword' => '标题关键字',
	'groupthread_keyword_comment' => '设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'groupthread_typeids' => '主题分类',
	'groupthread_typeids_comment' => '设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_typeids_all' => '全部的主题分类',
	'groupthread_sortids' => '分类信息',
	'groupthread_sortids_comment' => '设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_sortids_all' => '全部的分类信息',
	'groupthread_threadtype' => '显示主题分类前缀',
	'groupthread_threadtype_comment' => '设置是否在主题列表中，给分类的主题前加上分类名称',
	'groupthread_groupthreadort' => '显示分类信息前缀',
	'groupthread_groupthreadort_comment' => '设置是否在主题列表中，给分类信息的主题前加上分类信息名称',
	'groupthread_highlight' => '显示主题的高亮特性',
	'groupthread_highlight_comment' => '设置是否显示主题的高亮特性',
	'groupthread_digest' => '精华主题过滤',
	'groupthread_digest_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_digest_0' => '普通主题',
	'groupthread_digest_1' => '精华 I',
	'groupthread_digest_2' => '精华 II',
	'groupthread_digest_3' => '精华 III',
	'groupthread_stick' => '置顶主题过滤',
	'groupthread_stick_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_stick_0' => '普通主题',
	'groupthread_stick_1' => '置顶 I',
	'groupthread_stick_2' => '置顶 II',
	'groupthread_stick_3' => '置顶 III',
	'groupthread_special' => '特殊主题过滤',
	'groupthread_special_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'groupthread_special_1' => '投票主题',
	'groupthread_special_2' => '商品主题',
	'groupthread_special_3' => '悬赏主题',
	'groupthread_special_4' => '活动主题',
	'groupthread_special_5' => '辩论主题',
	'groupthread_special_0' => '普通主题',
	'groupthread_special_reward' => '悬赏主题过滤',
	'groupthread_special_reward_comment' => '设置特定类型的悬赏主题',
	'groupthread_picrequired' => '必须含图片附件',
	'groupthread_picrequired_comment' => '设置是否只显示含有图片附件的主题',
	'groupthread_special_reward_0' => '全部',
	'groupthread_special_reward_1' => '已解决',
	'groupthread_special_reward_2' => '未解决',
	'groupthread_recommend' => '推荐主题过滤',
	'groupthread_recommend_comment' => '设置是否只显示推荐的主题',
	'groupthread_orderby' => '主题排序方式',
	'groupthread_orderby_comment' => '设置以哪一字段或方式对主题进行排序',
	'groupthread_orderby_lastpost' => '按最后回复时间倒序排序',
	'groupthread_orderby_dateline' => '按发布时间倒序排序',
	'groupthread_orderby_replies' => '按回复数倒序排序',
	'groupthread_orderby_views' => '按浏览次数倒序排序',
	'groupthread_orderby_heats' => '按热度倒序排序',
	'groupthread_orderby_recommends' => '按主题评价倒序排序',
	'groupthread_orderby_hourviews' => '按小时内浏览次数倒序排序',
	'groupthread_orderby_todayviews' => '按当天浏览次数倒序排序',
	'groupthread_orderby_weekviews' => '按本周浏览次数倒序排序',
	'groupthread_orderby_monthviews' => '按当月浏览次数倒序排序',
	'groupthread_postdateline' => '主题发布时间',
	'groupthread_postdateline_nolimit' => '不限制',
	'groupthread_postdateline_hour' => '1小时内',
	'groupthread_postdateline_day' => '24小时内',
	'groupthread_postdateline_week' => '7天内',
	'groupthread_postdateline_month' => '1个月内',
	'groupthread_lastpost' => '最后更新时间',
	'groupthread_lastpost_nolimit' => '不限制',
	'groupthread_lastpost_hour' => '1小时内',
	'groupthread_lastpost_day' => '24小时内',
	'groupthread_lastpost_week' => '7天内',
	'groupthread_lastpost_month' => '1个月内',
	'groupthread_orderby_displayorder' => '按默认顺序',
	'groupthread_gviewperm' => '圈子浏览权限',
	'groupthread_gviewperm_nolimit' => '不限制',
	'groupthread_gviewperm_only_member' => '仅成员',
	'groupthread_gviewperm_all_member' => '所有人',
	'groupthread_highlight' => '获得高亮值',
);

?>